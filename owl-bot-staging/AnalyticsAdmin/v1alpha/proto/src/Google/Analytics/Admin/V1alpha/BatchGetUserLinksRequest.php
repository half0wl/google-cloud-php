<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BatchGetUserLinks RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.BatchGetUserLinksRequest</code>
 */
class BatchGetUserLinksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The account or property that all user links in the request are
     * for. The parent of all provided values for the 'names' field must match
     * this field.
     * Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The names of the user links to retrieve.
     * A maximum of 1000 user links can be retrieved in a batch.
     * Format: accounts/{accountId}/userLinks/{userLinkId}
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The account or property that all user links in the request are
     *           for. The parent of all provided values for the 'names' field must match
     *           this field.
     *           Example format: accounts/1234
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $names
     *           Required. The names of the user links to retrieve.
     *           A maximum of 1000 user links can be retrieved in a batch.
     *           Format: accounts/{accountId}/userLinks/{userLinkId}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The account or property that all user links in the request are
     * for. The parent of all provided values for the 'names' field must match
     * this field.
     * Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The account or property that all user links in the request are
     * for. The parent of all provided values for the 'names' field must match
     * this field.
     * Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The names of the user links to retrieve.
     * A maximum of 1000 user links can be retrieved in a batch.
     * Format: accounts/{accountId}/userLinks/{userLinkId}
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Required. The names of the user links to retrieve.
     * A maximum of 1000 user links can be retrieved in a batch.
     * Format: accounts/{accountId}/userLinks/{userLinkId}
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->names = $arr;

        return $this;
    }

}

