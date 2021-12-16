<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Read-replica configuration for connecting to the on-premises primary
 * instance.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.DemoteMasterConfiguration</code>
 */
class DemoteMasterConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always **sql#demoteMasterConfiguration**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * MySQL specific configuration when replicating from a MySQL on-premises
     * primary instance. Replication configuration information such as the
     * username, password, certificates, and keys are not stored in the instance
     * metadata. The configuration information is used only to set up the
     * replication connection and is stored by MySQL in a file named
     * **master.info** in the data directory.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.DemoteMasterMySqlReplicaConfiguration mysql_replica_configuration = 2;</code>
     */
    private $mysql_replica_configuration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always **sql#demoteMasterConfiguration**.
     *     @type \Google\Cloud\Sql\V1beta4\DemoteMasterMySqlReplicaConfiguration $mysql_replica_configuration
     *           MySQL specific configuration when replicating from a MySQL on-premises
     *           primary instance. Replication configuration information such as the
     *           username, password, certificates, and keys are not stored in the instance
     *           metadata. The configuration information is used only to set up the
     *           replication connection and is stored by MySQL in a file named
     *           **master.info** in the data directory.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always **sql#demoteMasterConfiguration**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always **sql#demoteMasterConfiguration**.
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
     * MySQL specific configuration when replicating from a MySQL on-premises
     * primary instance. Replication configuration information such as the
     * username, password, certificates, and keys are not stored in the instance
     * metadata. The configuration information is used only to set up the
     * replication connection and is stored by MySQL in a file named
     * **master.info** in the data directory.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.DemoteMasterMySqlReplicaConfiguration mysql_replica_configuration = 2;</code>
     * @return \Google\Cloud\Sql\V1beta4\DemoteMasterMySqlReplicaConfiguration|null
     */
    public function getMysqlReplicaConfiguration()
    {
        return $this->mysql_replica_configuration;
    }

    public function hasMysqlReplicaConfiguration()
    {
        return isset($this->mysql_replica_configuration);
    }

    public function clearMysqlReplicaConfiguration()
    {
        unset($this->mysql_replica_configuration);
    }

    /**
     * MySQL specific configuration when replicating from a MySQL on-premises
     * primary instance. Replication configuration information such as the
     * username, password, certificates, and keys are not stored in the instance
     * metadata. The configuration information is used only to set up the
     * replication connection and is stored by MySQL in a file named
     * **master.info** in the data directory.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.DemoteMasterMySqlReplicaConfiguration mysql_replica_configuration = 2;</code>
     * @param \Google\Cloud\Sql\V1beta4\DemoteMasterMySqlReplicaConfiguration $var
     * @return $this
     */
    public function setMysqlReplicaConfiguration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\DemoteMasterMySqlReplicaConfiguration::class);
        $this->mysql_replica_configuration = $var;

        return $this;
    }

}

