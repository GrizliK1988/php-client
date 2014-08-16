<?php
/**
 * Created by PhpStorm.
 * User: dwendlandt
 * Date: 20/06/14
 * Time: 08:09
 */

namespace Elastification\Client\Request\Shared;

use Elastification\Client\Exception\RequestException;
use Elastification\Client\Request\RequestInterface;
use Elastification\Client\Request\RequestMethods;
use Elastification\Client\Response\ResponseInterface;
use Elastification\Client\Serializer\SerializerInterface;

abstract class AbstractSearchRequest extends AbstractBaseRequest
{
    const REQUEST_ACTION = '_search';

    /**
     * @var null|string
     */
    private $body = null;

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return RequestMethods::POST;
    }

    /**
     * @inheritdoc
     */
    public function getAction()
    {
        return self::REQUEST_ACTION;
    }

    /**
     * @inheritdoc
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @inheritdoc
     */
    public function setBody($body)
    {
        $this->body = $this->getSerializer()->serialize($body, $this->serializerParams);
    }
}