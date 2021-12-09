<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A schedule for disks where the schedueled operations are performed.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicySnapshotSchedulePolicySchedule</code>
 */
class ResourcePolicySnapshotSchedulePolicySchedule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ResourcePolicyDailyCycle daily_schedule = 86159869;</code>
     */
    private $daily_schedule = null;
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ResourcePolicyHourlyCycle hourly_schedule = 38328485;</code>
     */
    private $hourly_schedule = null;
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ResourcePolicyWeeklyCycle weekly_schedule = 359548053;</code>
     */
    private $weekly_schedule = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\ResourcePolicyDailyCycle $daily_schedule
     *     @type \Google\Cloud\Compute\V1\ResourcePolicyHourlyCycle $hourly_schedule
     *     @type \Google\Cloud\Compute\V1\ResourcePolicyWeeklyCycle $weekly_schedule
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ResourcePolicyDailyCycle daily_schedule = 86159869;</code>
     * @return \Google\Cloud\Compute\V1\ResourcePolicyDailyCycle|null
     */
    public function getDailySchedule()
    {
        return $this->daily_schedule;
    }

    public function hasDailySchedule()
    {
        return isset($this->daily_schedule);
    }

    public function clearDailySchedule()
    {
        unset($this->daily_schedule);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ResourcePolicyDailyCycle daily_schedule = 86159869;</code>
     * @param \Google\Cloud\Compute\V1\ResourcePolicyDailyCycle $var
     * @return $this
     */
    public function setDailySchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ResourcePolicyDailyCycle::class);
        $this->daily_schedule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ResourcePolicyHourlyCycle hourly_schedule = 38328485;</code>
     * @return \Google\Cloud\Compute\V1\ResourcePolicyHourlyCycle|null
     */
    public function getHourlySchedule()
    {
        return $this->hourly_schedule;
    }

    public function hasHourlySchedule()
    {
        return isset($this->hourly_schedule);
    }

    public function clearHourlySchedule()
    {
        unset($this->hourly_schedule);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ResourcePolicyHourlyCycle hourly_schedule = 38328485;</code>
     * @param \Google\Cloud\Compute\V1\ResourcePolicyHourlyCycle $var
     * @return $this
     */
    public function setHourlySchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ResourcePolicyHourlyCycle::class);
        $this->hourly_schedule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ResourcePolicyWeeklyCycle weekly_schedule = 359548053;</code>
     * @return \Google\Cloud\Compute\V1\ResourcePolicyWeeklyCycle|null
     */
    public function getWeeklySchedule()
    {
        return $this->weekly_schedule;
    }

    public function hasWeeklySchedule()
    {
        return isset($this->weekly_schedule);
    }

    public function clearWeeklySchedule()
    {
        unset($this->weekly_schedule);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ResourcePolicyWeeklyCycle weekly_schedule = 359548053;</code>
     * @param \Google\Cloud\Compute\V1\ResourcePolicyWeeklyCycle $var
     * @return $this
     */
    public function setWeeklySchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ResourcePolicyWeeklyCycle::class);
        $this->weekly_schedule = $var;

        return $this;
    }

}

