<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group.proto

namespace GPBMetadata\Google\Monitoring\V3;

class Group
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 google/monitoring/v3/group.protogoogle.monitoring.v3"�
Group
name (	
display_name (	
parent_name (	
filter (	

is_cluster (:��A�
monitoring.googleapis.com/Group!projects/{project}/groups/{group}+organizations/{organization}/groups/{group}folders/{folder}/groups/{group}*B�
com.google.monitoring.v3B
GroupProtoPZ>google.golang.org/genproto/googleapis/monitoring/v3;monitoring�Google.Cloud.Monitoring.V3�Google\\Cloud\\Monitoring\\V3�Google::Cloud::Monitoring::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

