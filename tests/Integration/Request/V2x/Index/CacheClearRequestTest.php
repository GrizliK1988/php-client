<?php
namespace Elastification\Client\Tests\Integration\Request\V2x\Index;


use Elastification\Client\Request\V2x\Index\CacheClearRequest;
use Elastification\Client\Response\V2x\Index\RefreshIndexResponse;
use Elastification\Client\Tests\Integration\Request\V2x\AbstractElastic;

class CacheClearRequestTest extends AbstractElastic
{
    const TYPE = 'request-index-optimize';

    public function testClearCache()
    {
        $this->createIndex();
        $this->createDocument(self::TYPE);

        $refreshIndexRequest = new CacheClearRequest(ES_INDEX, null, $this->getSerializer());

        /** @var RefreshIndexResponse $response */
        $response = $this->getClient()->send($refreshIndexRequest);

        $shards = $response->getShards();
        $this->assertTrue(isset($shards['total']));
        $this->assertTrue(isset($shards['successful']));
        $this->assertTrue(isset($shards['failed']));
    }

}
