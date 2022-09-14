<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NotificationConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Allows filtering to one or more specific event types. If event types are
 * present, those and only those event types will be transmitted to the
 * cluster. Other types will be skipped. If no filter is specified, or no
 * event types are present, all event types will be sent
 *
 * Generated from protobuf message <code>google.container.v1.NotificationConfig.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Event types to allowlist.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.NotificationConfig.EventType event_type = 1;</code>
     */
    private $event_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $event_type
     *           Event types to allowlist.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Event types to allowlist.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.NotificationConfig.EventType event_type = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * Event types to allowlist.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.NotificationConfig.EventType event_type = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Container\V1\NotificationConfig\EventType::class);
        $this->event_type = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Google\Cloud\Container\V1\NotificationConfig_Filter::class);

