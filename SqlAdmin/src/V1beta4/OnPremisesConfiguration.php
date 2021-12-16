<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * On-premises instance configuration.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.OnPremisesConfiguration</code>
 */
class OnPremisesConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * The host and port of the on-premises instance in host:port format
     *
     * Generated from protobuf field <code>string host_port = 1;</code>
     */
    private $host_port = '';
    /**
     * This is always **sql#onPremisesConfiguration**.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     */
    private $kind = '';
    /**
     * The username for connecting to on-premises instance.
     *
     * Generated from protobuf field <code>string username = 3;</code>
     */
    private $username = '';
    /**
     * The password for connecting to on-premises instance.
     *
     * Generated from protobuf field <code>string password = 4;</code>
     */
    private $password = '';
    /**
     * PEM representation of the trusted CA's x509 certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 5;</code>
     */
    private $ca_certificate = '';
    /**
     * PEM representation of the replica's x509 certificate.
     *
     * Generated from protobuf field <code>string client_certificate = 6;</code>
     */
    private $client_certificate = '';
    /**
     * PEM representation of the replica's private key. The corresponsing public
     * key is encoded in the client's certificate.
     *
     * Generated from protobuf field <code>string client_key = 7;</code>
     */
    private $client_key = '';
    /**
     * The dump file to create the Cloud SQL replica.
     *
     * Generated from protobuf field <code>string dump_file_path = 8;</code>
     */
    private $dump_file_path = '';
    /**
     * The reference to Cloud SQL instance if the source is Cloud SQL.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.InstanceReference source_instance = 15;</code>
     */
    private $source_instance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $host_port
     *           The host and port of the on-premises instance in host:port format
     *     @type string $kind
     *           This is always **sql#onPremisesConfiguration**.
     *     @type string $username
     *           The username for connecting to on-premises instance.
     *     @type string $password
     *           The password for connecting to on-premises instance.
     *     @type string $ca_certificate
     *           PEM representation of the trusted CA's x509 certificate.
     *     @type string $client_certificate
     *           PEM representation of the replica's x509 certificate.
     *     @type string $client_key
     *           PEM representation of the replica's private key. The corresponsing public
     *           key is encoded in the client's certificate.
     *     @type string $dump_file_path
     *           The dump file to create the Cloud SQL replica.
     *     @type \Google\Cloud\Sql\V1beta4\InstanceReference $source_instance
     *           The reference to Cloud SQL instance if the source is Cloud SQL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The host and port of the on-premises instance in host:port format
     *
     * Generated from protobuf field <code>string host_port = 1;</code>
     * @return string
     */
    public function getHostPort()
    {
        return $this->host_port;
    }

    /**
     * The host and port of the on-premises instance in host:port format
     *
     * Generated from protobuf field <code>string host_port = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHostPort($var)
    {
        GPBUtil::checkString($var, True);
        $this->host_port = $var;

        return $this;
    }

    /**
     * This is always **sql#onPremisesConfiguration**.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always **sql#onPremisesConfiguration**.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
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
     * The username for connecting to on-premises instance.
     *
     * Generated from protobuf field <code>string username = 3;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * The username for connecting to on-premises instance.
     *
     * Generated from protobuf field <code>string username = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * The password for connecting to on-premises instance.
     *
     * Generated from protobuf field <code>string password = 4;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * The password for connecting to on-premises instance.
     *
     * Generated from protobuf field <code>string password = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * PEM representation of the trusted CA's x509 certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 5;</code>
     * @return string
     */
    public function getCaCertificate()
    {
        return $this->ca_certificate;
    }

    /**
     * PEM representation of the trusted CA's x509 certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCaCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->ca_certificate = $var;

        return $this;
    }

    /**
     * PEM representation of the replica's x509 certificate.
     *
     * Generated from protobuf field <code>string client_certificate = 6;</code>
     * @return string
     */
    public function getClientCertificate()
    {
        return $this->client_certificate;
    }

    /**
     * PEM representation of the replica's x509 certificate.
     *
     * Generated from protobuf field <code>string client_certificate = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setClientCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_certificate = $var;

        return $this;
    }

    /**
     * PEM representation of the replica's private key. The corresponsing public
     * key is encoded in the client's certificate.
     *
     * Generated from protobuf field <code>string client_key = 7;</code>
     * @return string
     */
    public function getClientKey()
    {
        return $this->client_key;
    }

    /**
     * PEM representation of the replica's private key. The corresponsing public
     * key is encoded in the client's certificate.
     *
     * Generated from protobuf field <code>string client_key = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setClientKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_key = $var;

        return $this;
    }

    /**
     * The dump file to create the Cloud SQL replica.
     *
     * Generated from protobuf field <code>string dump_file_path = 8;</code>
     * @return string
     */
    public function getDumpFilePath()
    {
        return $this->dump_file_path;
    }

    /**
     * The dump file to create the Cloud SQL replica.
     *
     * Generated from protobuf field <code>string dump_file_path = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDumpFilePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->dump_file_path = $var;

        return $this;
    }

    /**
     * The reference to Cloud SQL instance if the source is Cloud SQL.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.InstanceReference source_instance = 15;</code>
     * @return \Google\Cloud\Sql\V1beta4\InstanceReference|null
     */
    public function getSourceInstance()
    {
        return $this->source_instance;
    }

    public function hasSourceInstance()
    {
        return isset($this->source_instance);
    }

    public function clearSourceInstance()
    {
        unset($this->source_instance);
    }

    /**
     * The reference to Cloud SQL instance if the source is Cloud SQL.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.InstanceReference source_instance = 15;</code>
     * @param \Google\Cloud\Sql\V1beta4\InstanceReference $var
     * @return $this
     */
    public function setSourceInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\InstanceReference::class);
        $this->source_instance = $var;

        return $this;
    }

}

