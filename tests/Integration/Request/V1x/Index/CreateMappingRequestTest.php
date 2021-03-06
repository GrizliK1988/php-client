<?php
namespace Elastification\Client\Tests\Integration\Request\V1x\Index;


use Elastification\Client\Request\V1x\Index\CreateMappingRequest;
use Elastification\Client\Request\V1x\Index\GetMappingRequest;
use Elastification\Client\Response\ResponseInterface;
use Elastification\Client\Response\V1x\Index\IndexResponse;
use Elastification\Client\Tests\Integration\Request\V1x\AbstractElastic;

class CreateMappingRequestTest extends AbstractElastic
{
    const TYPE = 'request-index-create-mapping';

    public function testCreateMappingWithIndexAndType()
    {
        $this->createIndex();

        $mapping = [
            self::TYPE => [
                'properties' => [
                    'message' => ['type' => 'string']
                ]
            ]
        ];

        $createMappingRequest = new CreateMappingRequest(ES_INDEX , self::TYPE, $this->getSerializer());
        $createMappingRequest->setBody($mapping);

        /** @var IndexResponse $response */
        $response = $this->getClient()->send($createMappingRequest);

        $this->assertTrue($response->acknowledged());

        $this->refreshIndex();

        //check if exists
        $getMappingRequest = new GetMappingRequest(ES_INDEX, self::TYPE, $this->getSerializer());

        /** @var ResponseInterface $getMappingResponse */
        $getMappingResponse = $this->getClient()->send($getMappingRequest);
        $data = $getMappingResponse->getData()->getGatewayValue();

        $this->assertTrue(isset($data[ES_INDEX]));
        $mappings = $data[ES_INDEX]['mappings'];
        $this->assertTrue(isset($mappings[self::TYPE]['properties']));
        $this->assertTrue(isset($mappings[self::TYPE]['properties']['message']));
        $this->assertTrue(isset($mappings[self::TYPE]['properties']['message']['type']));
        $this->assertSame('string', $mappings[self::TYPE]['properties']['message']['type']);
    }
}
