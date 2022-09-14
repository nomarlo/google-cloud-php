<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Output Only] If errors are generated during processing of the operation, this field will be populated.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Error</code>
 */
class Error extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The array of errors encountered while processing this operation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Errors errors = 315977579;</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\Errors>|\Google\Protobuf\Internal\RepeatedField $errors
     *           [Output Only] The array of errors encountered while processing this operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The array of errors encountered while processing this operation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Errors errors = 315977579;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * [Output Only] The array of errors encountered while processing this operation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Errors errors = 315977579;</code>
     * @param array<\Google\Cloud\Compute\V1\Errors>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Errors::class);
        $this->errors = $arr;

        return $this;
    }

}

