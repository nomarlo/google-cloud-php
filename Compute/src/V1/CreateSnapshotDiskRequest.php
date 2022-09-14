<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Disks.CreateSnapshot. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.CreateSnapshotDiskRequest</code>
 */
class CreateSnapshotDiskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the persistent disk to snapshot.
     *
     * Generated from protobuf field <code>string disk = 3083677 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $disk = '';
    /**
     * [Input Only] Whether to attempt an application consistent snapshot by informing the OS to prepare for the snapshot process.
     *
     * Generated from protobuf field <code>optional bool guest_flush = 385550813;</code>
     */
    private $guest_flush = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Snapshot snapshot_resource = 481319977 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $snapshot_resource = null;
    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     */
    private $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $disk
     *           Name of the persistent disk to snapshot.
     *     @type bool $guest_flush
     *           [Input Only] Whether to attempt an application consistent snapshot by informing the OS to prepare for the snapshot process.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *     @type \Google\Cloud\Compute\V1\Snapshot $snapshot_resource
     *           The body resource for this request
     *     @type string $zone
     *           The name of the zone for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the persistent disk to snapshot.
     *
     * Generated from protobuf field <code>string disk = 3083677 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisk()
    {
        return $this->disk;
    }

    /**
     * Name of the persistent disk to snapshot.
     *
     * Generated from protobuf field <code>string disk = 3083677 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisk($var)
    {
        GPBUtil::checkString($var, True);
        $this->disk = $var;

        return $this;
    }

    /**
     * [Input Only] Whether to attempt an application consistent snapshot by informing the OS to prepare for the snapshot process.
     *
     * Generated from protobuf field <code>optional bool guest_flush = 385550813;</code>
     * @return bool
     */
    public function getGuestFlush()
    {
        return isset($this->guest_flush) ? $this->guest_flush : false;
    }

    public function hasGuestFlush()
    {
        return isset($this->guest_flush);
    }

    public function clearGuestFlush()
    {
        unset($this->guest_flush);
    }

    /**
     * [Input Only] Whether to attempt an application consistent snapshot by informing the OS to prepare for the snapshot process.
     *
     * Generated from protobuf field <code>optional bool guest_flush = 385550813;</code>
     * @param bool $var
     * @return $this
     */
    public function setGuestFlush($var)
    {
        GPBUtil::checkBool($var);
        $this->guest_flush = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Snapshot snapshot_resource = 481319977 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\Snapshot|null
     */
    public function getSnapshotResource()
    {
        return $this->snapshot_resource;
    }

    public function hasSnapshotResource()
    {
        return isset($this->snapshot_resource);
    }

    public function clearSnapshotResource()
    {
        unset($this->snapshot_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Snapshot snapshot_resource = 481319977 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\Snapshot $var
     * @return $this
     */
    public function setSnapshotResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Snapshot::class);
        $this->snapshot_resource = $var;

        return $this;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

