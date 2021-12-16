<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Read-replica configuration specific to MySQL databases.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.MySqlReplicaConfiguration</code>
 */
class MySqlReplicaConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * Path to a SQL dump file in Google Cloud Storage from which the replica
     * instance is to be created. The URI is in the form gs://bucketName/fileName.
     * Compressed gzip files (.gz) are also supported.
     * Dumps have the binlog co-ordinates from which replication
     * begins. This can be accomplished by setting --master-data to 1 when using
     * mysqldump.
     *
     * Generated from protobuf field <code>string dump_file_path = 1;</code>
     */
    private $dump_file_path = '';
    /**
     * The username for the replication connection.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     */
    private $username = '';
    /**
     * The password for the replication connection.
     *
     * Generated from protobuf field <code>string password = 3;</code>
     */
    private $password = '';
    /**
     * Seconds to wait between connect retries. MySQL's default is 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value connect_retry_interval = 4;</code>
     */
    private $connect_retry_interval = null;
    /**
     * Interval in milliseconds between replication heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value master_heartbeat_period = 5;</code>
     */
    private $master_heartbeat_period = null;
    /**
     * PEM representation of the trusted CA's x509 certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 6;</code>
     */
    private $ca_certificate = '';
    /**
     * PEM representation of the replica's x509 certificate.
     *
     * Generated from protobuf field <code>string client_certificate = 7;</code>
     */
    private $client_certificate = '';
    /**
     * PEM representation of the replica's private key. The corresponsing public
     * key is encoded in the client's certificate.
     *
     * Generated from protobuf field <code>string client_key = 8;</code>
     */
    private $client_key = '';
    /**
     * A list of permissible ciphers to use for SSL encryption.
     *
     * Generated from protobuf field <code>string ssl_cipher = 9;</code>
     */
    private $ssl_cipher = '';
    /**
     * Whether or not to check the primary instance's Common Name value in the
     * certificate that it sends during the SSL handshake.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_server_certificate = 10;</code>
     */
    private $verify_server_certificate = null;
    /**
     * This is always **sql#mysqlReplicaConfiguration**.
     *
     * Generated from protobuf field <code>string kind = 11;</code>
     */
    private $kind = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dump_file_path
     *           Path to a SQL dump file in Google Cloud Storage from which the replica
     *           instance is to be created. The URI is in the form gs://bucketName/fileName.
     *           Compressed gzip files (.gz) are also supported.
     *           Dumps have the binlog co-ordinates from which replication
     *           begins. This can be accomplished by setting --master-data to 1 when using
     *           mysqldump.
     *     @type string $username
     *           The username for the replication connection.
     *     @type string $password
     *           The password for the replication connection.
     *     @type \Google\Protobuf\Int32Value $connect_retry_interval
     *           Seconds to wait between connect retries. MySQL's default is 60 seconds.
     *     @type \Google\Protobuf\Int64Value $master_heartbeat_period
     *           Interval in milliseconds between replication heartbeats.
     *     @type string $ca_certificate
     *           PEM representation of the trusted CA's x509 certificate.
     *     @type string $client_certificate
     *           PEM representation of the replica's x509 certificate.
     *     @type string $client_key
     *           PEM representation of the replica's private key. The corresponsing public
     *           key is encoded in the client's certificate.
     *     @type string $ssl_cipher
     *           A list of permissible ciphers to use for SSL encryption.
     *     @type \Google\Protobuf\BoolValue $verify_server_certificate
     *           Whether or not to check the primary instance's Common Name value in the
     *           certificate that it sends during the SSL handshake.
     *     @type string $kind
     *           This is always **sql#mysqlReplicaConfiguration**.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Path to a SQL dump file in Google Cloud Storage from which the replica
     * instance is to be created. The URI is in the form gs://bucketName/fileName.
     * Compressed gzip files (.gz) are also supported.
     * Dumps have the binlog co-ordinates from which replication
     * begins. This can be accomplished by setting --master-data to 1 when using
     * mysqldump.
     *
     * Generated from protobuf field <code>string dump_file_path = 1;</code>
     * @return string
     */
    public function getDumpFilePath()
    {
        return $this->dump_file_path;
    }

    /**
     * Path to a SQL dump file in Google Cloud Storage from which the replica
     * instance is to be created. The URI is in the form gs://bucketName/fileName.
     * Compressed gzip files (.gz) are also supported.
     * Dumps have the binlog co-ordinates from which replication
     * begins. This can be accomplished by setting --master-data to 1 when using
     * mysqldump.
     *
     * Generated from protobuf field <code>string dump_file_path = 1;</code>
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
     * The username for the replication connection.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * The username for the replication connection.
     *
     * Generated from protobuf field <code>string username = 2;</code>
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
     * The password for the replication connection.
     *
     * Generated from protobuf field <code>string password = 3;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * The password for the replication connection.
     *
     * Generated from protobuf field <code>string password = 3;</code>
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
     * Seconds to wait between connect retries. MySQL's default is 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value connect_retry_interval = 4;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getConnectRetryInterval()
    {
        return $this->connect_retry_interval;
    }

    public function hasConnectRetryInterval()
    {
        return isset($this->connect_retry_interval);
    }

    public function clearConnectRetryInterval()
    {
        unset($this->connect_retry_interval);
    }

    /**
     * Returns the unboxed value from <code>getConnectRetryInterval()</code>

     * Seconds to wait between connect retries. MySQL's default is 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value connect_retry_interval = 4;</code>
     * @return int|null
     */
    public function getConnectRetryIntervalValue()
    {
        return $this->readWrapperValue("connect_retry_interval");
    }

    /**
     * Seconds to wait between connect retries. MySQL's default is 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value connect_retry_interval = 4;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setConnectRetryInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->connect_retry_interval = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Seconds to wait between connect retries. MySQL's default is 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value connect_retry_interval = 4;</code>
     * @param int|null $var
     * @return $this
     */
    public function setConnectRetryIntervalValue($var)
    {
        $this->writeWrapperValue("connect_retry_interval", $var);
        return $this;}

    /**
     * Interval in milliseconds between replication heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value master_heartbeat_period = 5;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getMasterHeartbeatPeriod()
    {
        return $this->master_heartbeat_period;
    }

    public function hasMasterHeartbeatPeriod()
    {
        return isset($this->master_heartbeat_period);
    }

    public function clearMasterHeartbeatPeriod()
    {
        unset($this->master_heartbeat_period);
    }

    /**
     * Returns the unboxed value from <code>getMasterHeartbeatPeriod()</code>

     * Interval in milliseconds between replication heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value master_heartbeat_period = 5;</code>
     * @return int|string|null
     */
    public function getMasterHeartbeatPeriodValue()
    {
        return $this->readWrapperValue("master_heartbeat_period");
    }

    /**
     * Interval in milliseconds between replication heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value master_heartbeat_period = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMasterHeartbeatPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->master_heartbeat_period = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Interval in milliseconds between replication heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value master_heartbeat_period = 5;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMasterHeartbeatPeriodValue($var)
    {
        $this->writeWrapperValue("master_heartbeat_period", $var);
        return $this;}

    /**
     * PEM representation of the trusted CA's x509 certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 6;</code>
     * @return string
     */
    public function getCaCertificate()
    {
        return $this->ca_certificate;
    }

    /**
     * PEM representation of the trusted CA's x509 certificate.
     *
     * Generated from protobuf field <code>string ca_certificate = 6;</code>
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
     * Generated from protobuf field <code>string client_certificate = 7;</code>
     * @return string
     */
    public function getClientCertificate()
    {
        return $this->client_certificate;
    }

    /**
     * PEM representation of the replica's x509 certificate.
     *
     * Generated from protobuf field <code>string client_certificate = 7;</code>
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
     * Generated from protobuf field <code>string client_key = 8;</code>
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
     * Generated from protobuf field <code>string client_key = 8;</code>
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
     * A list of permissible ciphers to use for SSL encryption.
     *
     * Generated from protobuf field <code>string ssl_cipher = 9;</code>
     * @return string
     */
    public function getSslCipher()
    {
        return $this->ssl_cipher;
    }

    /**
     * A list of permissible ciphers to use for SSL encryption.
     *
     * Generated from protobuf field <code>string ssl_cipher = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSslCipher($var)
    {
        GPBUtil::checkString($var, True);
        $this->ssl_cipher = $var;

        return $this;
    }

    /**
     * Whether or not to check the primary instance's Common Name value in the
     * certificate that it sends during the SSL handshake.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_server_certificate = 10;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getVerifyServerCertificate()
    {
        return $this->verify_server_certificate;
    }

    public function hasVerifyServerCertificate()
    {
        return isset($this->verify_server_certificate);
    }

    public function clearVerifyServerCertificate()
    {
        unset($this->verify_server_certificate);
    }

    /**
     * Returns the unboxed value from <code>getVerifyServerCertificate()</code>

     * Whether or not to check the primary instance's Common Name value in the
     * certificate that it sends during the SSL handshake.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_server_certificate = 10;</code>
     * @return bool|null
     */
    public function getVerifyServerCertificateValue()
    {
        return $this->readWrapperValue("verify_server_certificate");
    }

    /**
     * Whether or not to check the primary instance's Common Name value in the
     * certificate that it sends during the SSL handshake.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_server_certificate = 10;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setVerifyServerCertificate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->verify_server_certificate = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether or not to check the primary instance's Common Name value in the
     * certificate that it sends during the SSL handshake.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_server_certificate = 10;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setVerifyServerCertificateValue($var)
    {
        $this->writeWrapperValue("verify_server_certificate", $var);
        return $this;}

    /**
     * This is always **sql#mysqlReplicaConfiguration**.
     *
     * Generated from protobuf field <code>string kind = 11;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always **sql#mysqlReplicaConfiguration**.
     *
     * Generated from protobuf field <code>string kind = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

