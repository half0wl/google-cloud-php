<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/transfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a data transfer configuration. A transfer configuration
 * contains all metadata needed to perform a data transfer. For example,
 * `destination_dataset_id` specifies where data should be stored.
 * When a new transfer configuration is created, the specified
 * `destination_dataset_id` is created when needed and shared with the
 * appropriate data source service account.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.TransferConfig</code>
 */
class TransferConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the transfer config.
     * Transfer config names have the form
     * `projects/{project_id}/locations/{region}/transferConfigs/{config_id}`.
     * Where `config_id` is usually a uuid, even though it is not
     * guaranteed or required. The name is ignored when creating a transfer
     * config.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * User specified display name for the data transfer.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * Data source id. Cannot be changed once data transfer is created.
     *
     * Generated from protobuf field <code>string data_source_id = 5;</code>
     */
    private $data_source_id = '';
    /**
     * Parameters specific to each data source. For more information see the
     * bq tab in the 'Setting up a data transfer' section for each data source.
     * For example the parameters for Cloud Storage transfers are listed here:
     * https://cloud.google.com/bigquery-transfer/docs/cloud-storage-transfer#bq
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 9;</code>
     */
    private $params = null;
    /**
     * Data transfer schedule.
     * If the data source does not support a custom schedule, this should be
     * empty. If it is empty, the default value for the data source will be
     * used.
     * The specified times are in UTC.
     * Examples of valid format:
     * `1st,3rd monday of month 15:30`,
     * `every wed,fri of jan,jun 13:15`, and
     * `first sunday of quarter 00:00`.
     * See more explanation about the format here:
     * https://cloud.google.com/appengine/docs/flexible/python/scheduling-jobs-with-cron-yaml#the_schedule_format
     * NOTE: the granularity should be at least 8 hours, or less frequent.
     *
     * Generated from protobuf field <code>string schedule = 7;</code>
     */
    private $schedule = '';
    /**
     * Options customizing the data transfer schedule.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ScheduleOptions schedule_options = 24;</code>
     */
    private $schedule_options = null;
    /**
     * The number of days to look back to automatically refresh the data.
     * For example, if `data_refresh_window_days = 10`, then every day
     * BigQuery reingests data for [today-10, today-1], rather than ingesting data
     * for just [today-1].
     * Only valid if the data source supports the feature. Set the value to  0
     * to use the default value.
     *
     * Generated from protobuf field <code>int32 data_refresh_window_days = 12;</code>
     */
    private $data_refresh_window_days = 0;
    /**
     * Is this config disabled. When set to true, no runs are scheduled
     * for a given transfer.
     *
     * Generated from protobuf field <code>bool disabled = 13;</code>
     */
    private $disabled = false;
    /**
     * Output only. Data transfer modification time. Ignored by server on input.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. Next time when data transfer will run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp next_run_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $next_run_time = null;
    /**
     * Output only. State of the most recently updated transfer run.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.TransferState state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Deprecated. Unique ID of the user on whose behalf transfer is done.
     *
     * Generated from protobuf field <code>int64 user_id = 11;</code>
     */
    private $user_id = 0;
    /**
     * Output only. Region in which BigQuery dataset is located.
     *
     * Generated from protobuf field <code>string dataset_region = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $dataset_region = '';
    /**
     * Pub/Sub topic where notifications will be sent after transfer runs
     * associated with this transfer config finish.
     * The format for specifying a pubsub topic is:
     * `projects/{project}/topics/{topic}`
     *
     * Generated from protobuf field <code>string notification_pubsub_topic = 15;</code>
     */
    private $notification_pubsub_topic = '';
    /**
     * Email notifications will be sent according to these preferences
     * to the email address of the user who owns this transfer config.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.EmailPreferences email_preferences = 18;</code>
     */
    private $email_preferences = null;
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the transfer config.
     *           Transfer config names have the form
     *           `projects/{project_id}/locations/{region}/transferConfigs/{config_id}`.
     *           Where `config_id` is usually a uuid, even though it is not
     *           guaranteed or required. The name is ignored when creating a transfer
     *           config.
     *     @type string $destination_dataset_id
     *           The BigQuery target dataset id.
     *     @type string $display_name
     *           User specified display name for the data transfer.
     *     @type string $data_source_id
     *           Data source id. Cannot be changed once data transfer is created.
     *     @type \Google\Protobuf\Struct $params
     *           Parameters specific to each data source. For more information see the
     *           bq tab in the 'Setting up a data transfer' section for each data source.
     *           For example the parameters for Cloud Storage transfers are listed here:
     *           https://cloud.google.com/bigquery-transfer/docs/cloud-storage-transfer#bq
     *     @type string $schedule
     *           Data transfer schedule.
     *           If the data source does not support a custom schedule, this should be
     *           empty. If it is empty, the default value for the data source will be
     *           used.
     *           The specified times are in UTC.
     *           Examples of valid format:
     *           `1st,3rd monday of month 15:30`,
     *           `every wed,fri of jan,jun 13:15`, and
     *           `first sunday of quarter 00:00`.
     *           See more explanation about the format here:
     *           https://cloud.google.com/appengine/docs/flexible/python/scheduling-jobs-with-cron-yaml#the_schedule_format
     *           NOTE: the granularity should be at least 8 hours, or less frequent.
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\ScheduleOptions $schedule_options
     *           Options customizing the data transfer schedule.
     *     @type int $data_refresh_window_days
     *           The number of days to look back to automatically refresh the data.
     *           For example, if `data_refresh_window_days = 10`, then every day
     *           BigQuery reingests data for [today-10, today-1], rather than ingesting data
     *           for just [today-1].
     *           Only valid if the data source supports the feature. Set the value to  0
     *           to use the default value.
     *     @type bool $disabled
     *           Is this config disabled. When set to true, no runs are scheduled
     *           for a given transfer.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Data transfer modification time. Ignored by server on input.
     *     @type \Google\Protobuf\Timestamp $next_run_time
     *           Output only. Next time when data transfer will run.
     *     @type int $state
     *           Output only. State of the most recently updated transfer run.
     *     @type int|string $user_id
     *           Deprecated. Unique ID of the user on whose behalf transfer is done.
     *     @type string $dataset_region
     *           Output only. Region in which BigQuery dataset is located.
     *     @type string $notification_pubsub_topic
     *           Pub/Sub topic where notifications will be sent after transfer runs
     *           associated with this transfer config finish.
     *           The format for specifying a pubsub topic is:
     *           `projects/{project}/topics/{topic}`
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\EmailPreferences $email_preferences
     *           Email notifications will be sent according to these preferences
     *           to the email address of the user who owns this transfer config.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the transfer config.
     * Transfer config names have the form
     * `projects/{project_id}/locations/{region}/transferConfigs/{config_id}`.
     * Where `config_id` is usually a uuid, even though it is not
     * guaranteed or required. The name is ignored when creating a transfer
     * config.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the transfer config.
     * Transfer config names have the form
     * `projects/{project_id}/locations/{region}/transferConfigs/{config_id}`.
     * Where `config_id` is usually a uuid, even though it is not
     * guaranteed or required. The name is ignored when creating a transfer
     * config.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The BigQuery target dataset id.
     *
     * Generated from protobuf field <code>string destination_dataset_id = 2;</code>
     * @return string
     */
    public function getDestinationDatasetId()
    {
        return $this->readOneof(2);
    }

    public function hasDestinationDatasetId()
    {
        return $this->hasOneof(2);
    }

    /**
     * The BigQuery target dataset id.
     *
     * Generated from protobuf field <code>string destination_dataset_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * User specified display name for the data transfer.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User specified display name for the data transfer.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Data source id. Cannot be changed once data transfer is created.
     *
     * Generated from protobuf field <code>string data_source_id = 5;</code>
     * @return string
     */
    public function getDataSourceId()
    {
        return $this->data_source_id;
    }

    /**
     * Data source id. Cannot be changed once data transfer is created.
     *
     * Generated from protobuf field <code>string data_source_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDataSourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_source_id = $var;

        return $this;
    }

    /**
     * Parameters specific to each data source. For more information see the
     * bq tab in the 'Setting up a data transfer' section for each data source.
     * For example the parameters for Cloud Storage transfers are listed here:
     * https://cloud.google.com/bigquery-transfer/docs/cloud-storage-transfer#bq
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 9;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getParams()
    {
        return isset($this->params) ? $this->params : null;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * Parameters specific to each data source. For more information see the
     * bq tab in the 'Setting up a data transfer' section for each data source.
     * For example the parameters for Cloud Storage transfers are listed here:
     * https://cloud.google.com/bigquery-transfer/docs/cloud-storage-transfer#bq
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 9;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->params = $var;

        return $this;
    }

    /**
     * Data transfer schedule.
     * If the data source does not support a custom schedule, this should be
     * empty. If it is empty, the default value for the data source will be
     * used.
     * The specified times are in UTC.
     * Examples of valid format:
     * `1st,3rd monday of month 15:30`,
     * `every wed,fri of jan,jun 13:15`, and
     * `first sunday of quarter 00:00`.
     * See more explanation about the format here:
     * https://cloud.google.com/appengine/docs/flexible/python/scheduling-jobs-with-cron-yaml#the_schedule_format
     * NOTE: the granularity should be at least 8 hours, or less frequent.
     *
     * Generated from protobuf field <code>string schedule = 7;</code>
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Data transfer schedule.
     * If the data source does not support a custom schedule, this should be
     * empty. If it is empty, the default value for the data source will be
     * used.
     * The specified times are in UTC.
     * Examples of valid format:
     * `1st,3rd monday of month 15:30`,
     * `every wed,fri of jan,jun 13:15`, and
     * `first sunday of quarter 00:00`.
     * See more explanation about the format here:
     * https://cloud.google.com/appengine/docs/flexible/python/scheduling-jobs-with-cron-yaml#the_schedule_format
     * NOTE: the granularity should be at least 8 hours, or less frequent.
     *
     * Generated from protobuf field <code>string schedule = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->schedule = $var;

        return $this;
    }

    /**
     * Options customizing the data transfer schedule.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ScheduleOptions schedule_options = 24;</code>
     * @return \Google\Cloud\BigQuery\DataTransfer\V1\ScheduleOptions|null
     */
    public function getScheduleOptions()
    {
        return isset($this->schedule_options) ? $this->schedule_options : null;
    }

    public function hasScheduleOptions()
    {
        return isset($this->schedule_options);
    }

    public function clearScheduleOptions()
    {
        unset($this->schedule_options);
    }

    /**
     * Options customizing the data transfer schedule.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.ScheduleOptions schedule_options = 24;</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\ScheduleOptions $var
     * @return $this
     */
    public function setScheduleOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataTransfer\V1\ScheduleOptions::class);
        $this->schedule_options = $var;

        return $this;
    }

    /**
     * The number of days to look back to automatically refresh the data.
     * For example, if `data_refresh_window_days = 10`, then every day
     * BigQuery reingests data for [today-10, today-1], rather than ingesting data
     * for just [today-1].
     * Only valid if the data source supports the feature. Set the value to  0
     * to use the default value.
     *
     * Generated from protobuf field <code>int32 data_refresh_window_days = 12;</code>
     * @return int
     */
    public function getDataRefreshWindowDays()
    {
        return $this->data_refresh_window_days;
    }

    /**
     * The number of days to look back to automatically refresh the data.
     * For example, if `data_refresh_window_days = 10`, then every day
     * BigQuery reingests data for [today-10, today-1], rather than ingesting data
     * for just [today-1].
     * Only valid if the data source supports the feature. Set the value to  0
     * to use the default value.
     *
     * Generated from protobuf field <code>int32 data_refresh_window_days = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setDataRefreshWindowDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->data_refresh_window_days = $var;

        return $this;
    }

    /**
     * Is this config disabled. When set to true, no runs are scheduled
     * for a given transfer.
     *
     * Generated from protobuf field <code>bool disabled = 13;</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Is this config disabled. When set to true, no runs are scheduled
     * for a given transfer.
     *
     * Generated from protobuf field <code>bool disabled = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * Output only. Data transfer modification time. Ignored by server on input.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Data transfer modification time. Ignored by server on input.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Next time when data transfer will run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp next_run_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNextRunTime()
    {
        return isset($this->next_run_time) ? $this->next_run_time : null;
    }

    public function hasNextRunTime()
    {
        return isset($this->next_run_time);
    }

    public function clearNextRunTime()
    {
        unset($this->next_run_time);
    }

    /**
     * Output only. Next time when data transfer will run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp next_run_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNextRunTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->next_run_time = $var;

        return $this;
    }

    /**
     * Output only. State of the most recently updated transfer run.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.TransferState state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the most recently updated transfer run.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.TransferState state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\DataTransfer\V1\TransferState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Deprecated. Unique ID of the user on whose behalf transfer is done.
     *
     * Generated from protobuf field <code>int64 user_id = 11;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Deprecated. Unique ID of the user on whose behalf transfer is done.
     *
     * Generated from protobuf field <code>int64 user_id = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Output only. Region in which BigQuery dataset is located.
     *
     * Generated from protobuf field <code>string dataset_region = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDatasetRegion()
    {
        return $this->dataset_region;
    }

    /**
     * Output only. Region in which BigQuery dataset is located.
     *
     * Generated from protobuf field <code>string dataset_region = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_region = $var;

        return $this;
    }

    /**
     * Pub/Sub topic where notifications will be sent after transfer runs
     * associated with this transfer config finish.
     * The format for specifying a pubsub topic is:
     * `projects/{project}/topics/{topic}`
     *
     * Generated from protobuf field <code>string notification_pubsub_topic = 15;</code>
     * @return string
     */
    public function getNotificationPubsubTopic()
    {
        return $this->notification_pubsub_topic;
    }

    /**
     * Pub/Sub topic where notifications will be sent after transfer runs
     * associated with this transfer config finish.
     * The format for specifying a pubsub topic is:
     * `projects/{project}/topics/{topic}`
     *
     * Generated from protobuf field <code>string notification_pubsub_topic = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setNotificationPubsubTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->notification_pubsub_topic = $var;

        return $this;
    }

    /**
     * Email notifications will be sent according to these preferences
     * to the email address of the user who owns this transfer config.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.EmailPreferences email_preferences = 18;</code>
     * @return \Google\Cloud\BigQuery\DataTransfer\V1\EmailPreferences|null
     */
    public function getEmailPreferences()
    {
        return isset($this->email_preferences) ? $this->email_preferences : null;
    }

    public function hasEmailPreferences()
    {
        return isset($this->email_preferences);
    }

    public function clearEmailPreferences()
    {
        unset($this->email_preferences);
    }

    /**
     * Email notifications will be sent according to these preferences
     * to the email address of the user who owns this transfer config.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.EmailPreferences email_preferences = 18;</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\EmailPreferences $var
     * @return $this
     */
    public function setEmailPreferences($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataTransfer\V1\EmailPreferences::class);
        $this->email_preferences = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

