<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Score is a summary of all elements in the data profile.
 * A higher number means more risk.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataRiskLevel</code>
 */
class DataRiskLevel extends \Google\Protobuf\Internal\Message
{
    /**
     * The score applied to the resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel.DataRiskLevelScore score = 1;</code>
     */
    private $score = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $score
     *           The score applied to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The score applied to the resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel.DataRiskLevelScore score = 1;</code>
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * The score applied to the resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel.DataRiskLevelScore score = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DataRiskLevel\DataRiskLevelScore::class);
        $this->score = $var;

        return $this;
    }

}

