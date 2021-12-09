<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A PublicDelegatedPrefix resource represents an IP block within a PublicAdvertisedPrefix that is configured within a single cloud scope (global or region). IPs in the block can be allocated to resources within that scope. Public delegated prefixes may be further broken up into smaller IP blocks in the same scope as the parent block.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PublicDelegatedPrefix</code>
 */
class PublicDelegatedPrefix extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a new PublicDelegatedPrefix. An up-to-date fingerprint must be provided in order to update the PublicDelegatedPrefix, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve a PublicDelegatedPrefix.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     */
    private $fingerprint = null;
    /**
     * [Output Only] The unique identifier for the resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * The IPv4 address range, in CIDR format, represented by this public delegated prefix.
     *
     * Generated from protobuf field <code>optional string ip_cidr_range = 98117322;</code>
     */
    private $ip_cidr_range = null;
    /**
     * If true, the prefix will be live migrated.
     *
     * Generated from protobuf field <code>optional bool is_live_migration = 511823856;</code>
     */
    private $is_live_migration = null;
    /**
     * [Output Only] Type of the resource. Always compute#publicDelegatedPrefix for public delegated prefixes.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * The URL of parent prefix. Either PublicAdvertisedPrefix or PublicDelegatedPrefix.
     *
     * Generated from protobuf field <code>optional string parent_prefix = 15233991;</code>
     */
    private $parent_prefix = null;
    /**
     * The list of sub public delegated prefixes that exist for this public delegated prefix.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PublicDelegatedPrefixPublicDelegatedSubPrefix public_delegated_sub_prefixs = 188940044;</code>
     */
    private $public_delegated_sub_prefixs;
    /**
     * [Output Only] URL of the region where the public delegated prefix resides. This field applies only to the region resource. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] The status of the public delegated prefix.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $fingerprint
     *           Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a new PublicDelegatedPrefix. An up-to-date fingerprint must be provided in order to update the PublicDelegatedPrefix, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve a PublicDelegatedPrefix.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource type. The server generates this identifier.
     *     @type string $ip_cidr_range
     *           The IPv4 address range, in CIDR format, represented by this public delegated prefix.
     *     @type bool $is_live_migration
     *           If true, the prefix will be live migrated.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#publicDelegatedPrefix for public delegated prefixes.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $parent_prefix
     *           The URL of parent prefix. Either PublicAdvertisedPrefix or PublicDelegatedPrefix.
     *     @type \Google\Cloud\Compute\V1\PublicDelegatedPrefixPublicDelegatedSubPrefix[]|\Google\Protobuf\Internal\RepeatedField $public_delegated_sub_prefixs
     *           The list of sub public delegated prefixes that exist for this public delegated prefix.
     *     @type string $region
     *           [Output Only] URL of the region where the public delegated prefix resides. This field applies only to the region resource. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $status
     *           [Output Only] The status of the public delegated prefix.
     *           Check the Status enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a new PublicDelegatedPrefix. An up-to-date fingerprint must be provided in order to update the PublicDelegatedPrefix, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve a PublicDelegatedPrefix.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a new PublicDelegatedPrefix. An up-to-date fingerprint must be provided in order to update the PublicDelegatedPrefix, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve a PublicDelegatedPrefix.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The IPv4 address range, in CIDR format, represented by this public delegated prefix.
     *
     * Generated from protobuf field <code>optional string ip_cidr_range = 98117322;</code>
     * @return string
     */
    public function getIpCidrRange()
    {
        return isset($this->ip_cidr_range) ? $this->ip_cidr_range : '';
    }

    public function hasIpCidrRange()
    {
        return isset($this->ip_cidr_range);
    }

    public function clearIpCidrRange()
    {
        unset($this->ip_cidr_range);
    }

    /**
     * The IPv4 address range, in CIDR format, represented by this public delegated prefix.
     *
     * Generated from protobuf field <code>optional string ip_cidr_range = 98117322;</code>
     * @param string $var
     * @return $this
     */
    public function setIpCidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_cidr_range = $var;

        return $this;
    }

    /**
     * If true, the prefix will be live migrated.
     *
     * Generated from protobuf field <code>optional bool is_live_migration = 511823856;</code>
     * @return bool
     */
    public function getIsLiveMigration()
    {
        return isset($this->is_live_migration) ? $this->is_live_migration : false;
    }

    public function hasIsLiveMigration()
    {
        return isset($this->is_live_migration);
    }

    public function clearIsLiveMigration()
    {
        unset($this->is_live_migration);
    }

    /**
     * If true, the prefix will be live migrated.
     *
     * Generated from protobuf field <code>optional bool is_live_migration = 511823856;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLiveMigration($var)
    {
        GPBUtil::checkBool($var);
        $this->is_live_migration = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#publicDelegatedPrefix for public delegated prefixes.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#publicDelegatedPrefix for public delegated prefixes.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The URL of parent prefix. Either PublicAdvertisedPrefix or PublicDelegatedPrefix.
     *
     * Generated from protobuf field <code>optional string parent_prefix = 15233991;</code>
     * @return string
     */
    public function getParentPrefix()
    {
        return isset($this->parent_prefix) ? $this->parent_prefix : '';
    }

    public function hasParentPrefix()
    {
        return isset($this->parent_prefix);
    }

    public function clearParentPrefix()
    {
        unset($this->parent_prefix);
    }

    /**
     * The URL of parent prefix. Either PublicAdvertisedPrefix or PublicDelegatedPrefix.
     *
     * Generated from protobuf field <code>optional string parent_prefix = 15233991;</code>
     * @param string $var
     * @return $this
     */
    public function setParentPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_prefix = $var;

        return $this;
    }

    /**
     * The list of sub public delegated prefixes that exist for this public delegated prefix.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PublicDelegatedPrefixPublicDelegatedSubPrefix public_delegated_sub_prefixs = 188940044;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPublicDelegatedSubPrefixs()
    {
        return $this->public_delegated_sub_prefixs;
    }

    /**
     * The list of sub public delegated prefixes that exist for this public delegated prefix.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PublicDelegatedPrefixPublicDelegatedSubPrefix public_delegated_sub_prefixs = 188940044;</code>
     * @param \Google\Cloud\Compute\V1\PublicDelegatedPrefixPublicDelegatedSubPrefix[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPublicDelegatedSubPrefixs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\PublicDelegatedPrefixPublicDelegatedSubPrefix::class);
        $this->public_delegated_sub_prefixs = $arr;

        return $this;
    }

    /**
     * [Output Only] URL of the region where the public delegated prefix resides. This field applies only to the region resource. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] URL of the region where the public delegated prefix resides. This field applies only to the region resource. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] The status of the public delegated prefix.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] The status of the public delegated prefix.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

}

