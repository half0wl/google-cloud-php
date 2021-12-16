<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SslCerts Resource
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SslCert</code>
 */
class SslCert extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always **sql#sslCert**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * Serial number, as extracted from the certificate.
     *
     * Generated from protobuf field <code>string cert_serial_number = 2;</code>
     */
    private $cert_serial_number = '';
    /**
     * PEM representation.
     *
     * Generated from protobuf field <code>string cert = 3;</code>
     */
    private $cert = '';
    /**
     * The time when the certificate was created in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * **2012-11-15T16:19:00.094Z**.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    private $create_time = null;
    /**
     * User supplied name.  Constrained to [a-zA-Z.-_ ]+.
     *
     * Generated from protobuf field <code>string common_name = 5;</code>
     */
    private $common_name = '';
    /**
     * The time when the certificate expires in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * **2012-11-15T16:19:00.094Z**.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 6;</code>
     */
    private $expiration_time = null;
    /**
     * Sha1 Fingerprint.
     *
     * Generated from protobuf field <code>string sha1_fingerprint = 7;</code>
     */
    private $sha1_fingerprint = '';
    /**
     * Name of the database instance.
     *
     * Generated from protobuf field <code>string instance = 8;</code>
     */
    private $instance = '';
    /**
     * The URI of this resource.
     *
     * Generated from protobuf field <code>string self_link = 9;</code>
     */
    private $self_link = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always **sql#sslCert**.
     *     @type string $cert_serial_number
     *           Serial number, as extracted from the certificate.
     *     @type string $cert
     *           PEM representation.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time when the certificate was created in
     *           [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     *           **2012-11-15T16:19:00.094Z**.
     *     @type string $common_name
     *           User supplied name.  Constrained to [a-zA-Z.-_ ]+.
     *     @type \Google\Protobuf\Timestamp $expiration_time
     *           The time when the certificate expires in
     *           [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     *           **2012-11-15T16:19:00.094Z**.
     *     @type string $sha1_fingerprint
     *           Sha1 Fingerprint.
     *     @type string $instance
     *           Name of the database instance.
     *     @type string $self_link
     *           The URI of this resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always **sql#sslCert**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always **sql#sslCert**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
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
     * Serial number, as extracted from the certificate.
     *
     * Generated from protobuf field <code>string cert_serial_number = 2;</code>
     * @return string
     */
    public function getCertSerialNumber()
    {
        return $this->cert_serial_number;
    }

    /**
     * Serial number, as extracted from the certificate.
     *
     * Generated from protobuf field <code>string cert_serial_number = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCertSerialNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->cert_serial_number = $var;

        return $this;
    }

    /**
     * PEM representation.
     *
     * Generated from protobuf field <code>string cert = 3;</code>
     * @return string
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * PEM representation.
     *
     * Generated from protobuf field <code>string cert = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCert($var)
    {
        GPBUtil::checkString($var, True);
        $this->cert = $var;

        return $this;
    }

    /**
     * The time when the certificate was created in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * **2012-11-15T16:19:00.094Z**.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The time when the certificate was created in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * **2012-11-15T16:19:00.094Z**.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * User supplied name.  Constrained to [a-zA-Z.-_ ]+.
     *
     * Generated from protobuf field <code>string common_name = 5;</code>
     * @return string
     */
    public function getCommonName()
    {
        return $this->common_name;
    }

    /**
     * User supplied name.  Constrained to [a-zA-Z.-_ ]+.
     *
     * Generated from protobuf field <code>string common_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCommonName($var)
    {
        GPBUtil::checkString($var, True);
        $this->common_name = $var;

        return $this;
    }

    /**
     * The time when the certificate expires in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * **2012-11-15T16:19:00.094Z**.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpirationTime()
    {
        return $this->expiration_time;
    }

    public function hasExpirationTime()
    {
        return isset($this->expiration_time);
    }

    public function clearExpirationTime()
    {
        unset($this->expiration_time);
    }

    /**
     * The time when the certificate expires in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * **2012-11-15T16:19:00.094Z**.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     * Sha1 Fingerprint.
     *
     * Generated from protobuf field <code>string sha1_fingerprint = 7;</code>
     * @return string
     */
    public function getSha1Fingerprint()
    {
        return $this->sha1_fingerprint;
    }

    /**
     * Sha1 Fingerprint.
     *
     * Generated from protobuf field <code>string sha1_fingerprint = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSha1Fingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->sha1_fingerprint = $var;

        return $this;
    }

    /**
     * Name of the database instance.
     *
     * Generated from protobuf field <code>string instance = 8;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Name of the database instance.
     *
     * Generated from protobuf field <code>string instance = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * The URI of this resource.
     *
     * Generated from protobuf field <code>string self_link = 9;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * The URI of this resource.
     *
     * Generated from protobuf field <code>string self_link = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

}

