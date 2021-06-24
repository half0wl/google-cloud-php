<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing connection draining configuration.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ConnectionDraining</code>
 */
class ConnectionDraining extends \Google\Protobuf\Internal\Message
{
    /**
     * Configures a duration timeout for existing requests on a removed backend instance. For supported load balancers and protocols, as described in Enabling connection draining.
     *
     * Generated from protobuf field <code>int32 draining_timeout_sec = 225127070;</code>
     */
    private $draining_timeout_sec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $draining_timeout_sec
     *           Configures a duration timeout for existing requests on a removed backend instance. For supported load balancers and protocols, as described in Enabling connection draining.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Configures a duration timeout for existing requests on a removed backend instance. For supported load balancers and protocols, as described in Enabling connection draining.
     *
     * Generated from protobuf field <code>int32 draining_timeout_sec = 225127070;</code>
     * @return int
     */
    public function getDrainingTimeoutSec()
    {
        return isset($this->draining_timeout_sec) ? $this->draining_timeout_sec : 0;
    }

    public function hasDrainingTimeoutSec()
    {
        return isset($this->draining_timeout_sec);
    }

    public function clearDrainingTimeoutSec()
    {
        unset($this->draining_timeout_sec);
    }

    /**
     * Configures a duration timeout for existing requests on a removed backend instance. For supported load balancers and protocols, as described in Enabling connection draining.
     *
     * Generated from protobuf field <code>int32 draining_timeout_sec = 225127070;</code>
     * @param int $var
     * @return $this
     */
    public function setDrainingTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->draining_timeout_sec = $var;

        return $this;
    }

}

