<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a match condition that incoming traffic is evaluated against. Exactly one field must be specified.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.FirewallPolicyRuleMatcher</code>
 */
class FirewallPolicyRuleMatcher extends \Google\Protobuf\Internal\Message
{
    /**
     * CIDR IP address range. Maximum number of destination CIDR IP ranges allowed is 5000.
     *
     * Generated from protobuf field <code>repeated string dest_ip_ranges = 337357713;</code>
     */
    private $dest_ip_ranges;
    /**
     * Pairs of IP protocols and ports that the rule should match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRuleMatcherLayer4Config layer4_configs = 373534261;</code>
     */
    private $layer4_configs;
    /**
     * CIDR IP address range. Maximum number of source CIDR IP ranges allowed is 5000.
     *
     * Generated from protobuf field <code>repeated string src_ip_ranges = 432128083;</code>
     */
    private $src_ip_ranges;
    /**
     * List of secure tag values, which should be matched at the source of the traffic. For INGRESS rule, if all the srcSecureTag are INEFFECTIVE, and there is no srcIpRange, this rule will be ignored. Maximum number of source tag values allowed is 256.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRuleSecureTag src_secure_tags = 508791302;</code>
     */
    private $src_secure_tags;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $dest_ip_ranges
     *           CIDR IP address range. Maximum number of destination CIDR IP ranges allowed is 5000.
     *     @type array<\Google\Cloud\Compute\V1\FirewallPolicyRuleMatcherLayer4Config>|\Google\Protobuf\Internal\RepeatedField $layer4_configs
     *           Pairs of IP protocols and ports that the rule should match.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $src_ip_ranges
     *           CIDR IP address range. Maximum number of source CIDR IP ranges allowed is 5000.
     *     @type array<\Google\Cloud\Compute\V1\FirewallPolicyRuleSecureTag>|\Google\Protobuf\Internal\RepeatedField $src_secure_tags
     *           List of secure tag values, which should be matched at the source of the traffic. For INGRESS rule, if all the srcSecureTag are INEFFECTIVE, and there is no srcIpRange, this rule will be ignored. Maximum number of source tag values allowed is 256.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * CIDR IP address range. Maximum number of destination CIDR IP ranges allowed is 5000.
     *
     * Generated from protobuf field <code>repeated string dest_ip_ranges = 337357713;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestIpRanges()
    {
        return $this->dest_ip_ranges;
    }

    /**
     * CIDR IP address range. Maximum number of destination CIDR IP ranges allowed is 5000.
     *
     * Generated from protobuf field <code>repeated string dest_ip_ranges = 337357713;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dest_ip_ranges = $arr;

        return $this;
    }

    /**
     * Pairs of IP protocols and ports that the rule should match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRuleMatcherLayer4Config layer4_configs = 373534261;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLayer4Configs()
    {
        return $this->layer4_configs;
    }

    /**
     * Pairs of IP protocols and ports that the rule should match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRuleMatcherLayer4Config layer4_configs = 373534261;</code>
     * @param array<\Google\Cloud\Compute\V1\FirewallPolicyRuleMatcherLayer4Config>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLayer4Configs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\FirewallPolicyRuleMatcherLayer4Config::class);
        $this->layer4_configs = $arr;

        return $this;
    }

    /**
     * CIDR IP address range. Maximum number of source CIDR IP ranges allowed is 5000.
     *
     * Generated from protobuf field <code>repeated string src_ip_ranges = 432128083;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSrcIpRanges()
    {
        return $this->src_ip_ranges;
    }

    /**
     * CIDR IP address range. Maximum number of source CIDR IP ranges allowed is 5000.
     *
     * Generated from protobuf field <code>repeated string src_ip_ranges = 432128083;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSrcIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->src_ip_ranges = $arr;

        return $this;
    }

    /**
     * List of secure tag values, which should be matched at the source of the traffic. For INGRESS rule, if all the srcSecureTag are INEFFECTIVE, and there is no srcIpRange, this rule will be ignored. Maximum number of source tag values allowed is 256.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRuleSecureTag src_secure_tags = 508791302;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSrcSecureTags()
    {
        return $this->src_secure_tags;
    }

    /**
     * List of secure tag values, which should be matched at the source of the traffic. For INGRESS rule, if all the srcSecureTag are INEFFECTIVE, and there is no srcIpRange, this rule will be ignored. Maximum number of source tag values allowed is 256.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRuleSecureTag src_secure_tags = 508791302;</code>
     * @param array<\Google\Cloud\Compute\V1\FirewallPolicyRuleSecureTag>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSrcSecureTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\FirewallPolicyRuleSecureTag::class);
        $this->src_secure_tags = $arr;

        return $this;
    }

}

