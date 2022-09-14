<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlements.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for trial offers.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.TrialSettings</code>
 */
class TrialSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Determines if the entitlement is in a trial or not:
     * * `true` - The entitlement is in trial.
     * * `false` - The entitlement is not in trial.
     *
     * Generated from protobuf field <code>bool trial = 1;</code>
     */
    private $trial = false;
    /**
     * Date when the trial ends. The value is in milliseconds
     * using the UNIX Epoch format. See an example [Epoch
     * converter](https://www.epochconverter.com).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $trial
     *           Determines if the entitlement is in a trial or not:
     *           * `true` - The entitlement is in trial.
     *           * `false` - The entitlement is not in trial.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Date when the trial ends. The value is in milliseconds
     *           using the UNIX Epoch format. See an example [Epoch
     *           converter](https://www.epochconverter.com).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Entitlements::initOnce();
        parent::__construct($data);
    }

    /**
     * Determines if the entitlement is in a trial or not:
     * * `true` - The entitlement is in trial.
     * * `false` - The entitlement is not in trial.
     *
     * Generated from protobuf field <code>bool trial = 1;</code>
     * @return bool
     */
    public function getTrial()
    {
        return $this->trial;
    }

    /**
     * Determines if the entitlement is in a trial or not:
     * * `true` - The entitlement is in trial.
     * * `false` - The entitlement is not in trial.
     *
     * Generated from protobuf field <code>bool trial = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setTrial($var)
    {
        GPBUtil::checkBool($var);
        $this->trial = $var;

        return $this;
    }

    /**
     * Date when the trial ends. The value is in milliseconds
     * using the UNIX Epoch format. See an example [Epoch
     * converter](https://www.epochconverter.com).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Date when the trial ends. The value is in milliseconds
     * using the UNIX Epoch format. See an example [Epoch
     * converter](https://www.epochconverter.com).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

