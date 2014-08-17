<?php
namespace Elastification\Client\Serializer\JmsSerializer;

use JMS\Serializer\Annotation as JMS;

/**
 * @package Elastification\Client\Serializer\JmsSerializer
 * @author Mario Mueller
 * @since 2014-08-15
 * @version 1.0.0
 */
class Shards
{
    /**
     * @JMS\Type("integer")
     * @var integer
     */
    public $total;

    /**
     * @JMS\Type("integer")
     * @var integer
     */
    public $successful;

    /**
     * @JMS\Type("integer")
     * @var integer
     */
    public $failed;
}