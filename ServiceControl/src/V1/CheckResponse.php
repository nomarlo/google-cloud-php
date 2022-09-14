<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/service_controller.proto

namespace Google\Cloud\ServiceControl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the Check method.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.CheckResponse</code>
 */
class CheckResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The same operation_id value used in the
     * [CheckRequest][google.api.servicecontrol.v1.CheckRequest]. Used for logging
     * and diagnostics purposes.
     *
     * Generated from protobuf field <code>string operation_id = 1;</code>
     */
    private $operation_id = '';
    /**
     * Indicate the decision of the check.
     * If no check errors are present, the service should process the operation.
     * Otherwise the service should use the list of errors to determine the
     * appropriate action.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.CheckError check_errors = 2;</code>
     */
    private $check_errors;
    /**
     * The actual config id used to process the request.
     *
     * Generated from protobuf field <code>string service_config_id = 5;</code>
     */
    private $service_config_id = '';
    /**
     * The current service rollout id used to process the request.
     *
     * Generated from protobuf field <code>string service_rollout_id = 11;</code>
     */
    private $service_rollout_id = '';
    /**
     * Feedback data returned from the server during processing a Check request.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.CheckResponse.CheckInfo check_info = 6;</code>
     */
    private $check_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $operation_id
     *           The same operation_id value used in the
     *           [CheckRequest][google.api.servicecontrol.v1.CheckRequest]. Used for logging
     *           and diagnostics purposes.
     *     @type array<\Google\Cloud\ServiceControl\V1\CheckError>|\Google\Protobuf\Internal\RepeatedField $check_errors
     *           Indicate the decision of the check.
     *           If no check errors are present, the service should process the operation.
     *           Otherwise the service should use the list of errors to determine the
     *           appropriate action.
     *     @type string $service_config_id
     *           The actual config id used to process the request.
     *     @type string $service_rollout_id
     *           The current service rollout id used to process the request.
     *     @type \Google\Cloud\ServiceControl\V1\CheckResponse\CheckInfo $check_info
     *           Feedback data returned from the server during processing a Check request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\ServiceController::initOnce();
        parent::__construct($data);
    }

    /**
     * The same operation_id value used in the
     * [CheckRequest][google.api.servicecontrol.v1.CheckRequest]. Used for logging
     * and diagnostics purposes.
     *
     * Generated from protobuf field <code>string operation_id = 1;</code>
     * @return string
     */
    public function getOperationId()
    {
        return $this->operation_id;
    }

    /**
     * The same operation_id value used in the
     * [CheckRequest][google.api.servicecontrol.v1.CheckRequest]. Used for logging
     * and diagnostics purposes.
     *
     * Generated from protobuf field <code>string operation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_id = $var;

        return $this;
    }

    /**
     * Indicate the decision of the check.
     * If no check errors are present, the service should process the operation.
     * Otherwise the service should use the list of errors to determine the
     * appropriate action.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.CheckError check_errors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCheckErrors()
    {
        return $this->check_errors;
    }

    /**
     * Indicate the decision of the check.
     * If no check errors are present, the service should process the operation.
     * Otherwise the service should use the list of errors to determine the
     * appropriate action.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.CheckError check_errors = 2;</code>
     * @param array<\Google\Cloud\ServiceControl\V1\CheckError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCheckErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ServiceControl\V1\CheckError::class);
        $this->check_errors = $arr;

        return $this;
    }

    /**
     * The actual config id used to process the request.
     *
     * Generated from protobuf field <code>string service_config_id = 5;</code>
     * @return string
     */
    public function getServiceConfigId()
    {
        return $this->service_config_id;
    }

    /**
     * The actual config id used to process the request.
     *
     * Generated from protobuf field <code>string service_config_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_config_id = $var;

        return $this;
    }

    /**
     * The current service rollout id used to process the request.
     *
     * Generated from protobuf field <code>string service_rollout_id = 11;</code>
     * @return string
     */
    public function getServiceRolloutId()
    {
        return $this->service_rollout_id;
    }

    /**
     * The current service rollout id used to process the request.
     *
     * Generated from protobuf field <code>string service_rollout_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceRolloutId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_rollout_id = $var;

        return $this;
    }

    /**
     * Feedback data returned from the server during processing a Check request.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.CheckResponse.CheckInfo check_info = 6;</code>
     * @return \Google\Cloud\ServiceControl\V1\CheckResponse\CheckInfo|null
     */
    public function getCheckInfo()
    {
        return $this->check_info;
    }

    public function hasCheckInfo()
    {
        return isset($this->check_info);
    }

    public function clearCheckInfo()
    {
        unset($this->check_info);
    }

    /**
     * Feedback data returned from the server during processing a Check request.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.CheckResponse.CheckInfo check_info = 6;</code>
     * @param \Google\Cloud\ServiceControl\V1\CheckResponse\CheckInfo $var
     * @return $this
     */
    public function setCheckInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceControl\V1\CheckResponse\CheckInfo::class);
        $this->check_info = $var;

        return $this;
    }

}

