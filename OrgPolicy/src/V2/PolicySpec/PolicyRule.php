<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2\PolicySpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule used to express this policy.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.PolicySpec.PolicyRule</code>
 */
class PolicyRule extends \Google\Protobuf\Internal\Message
{
    /**
     * A condition which determines whether this rule is used
     * in the evaluation of the policy. When set, the `expression` field in
     * the `Expr' must include from 1 to 10 subexpressions, joined by the "||"
     * or "&&" operators. Each subexpression must be of the form
     * "resource.matchTag('<ORG_ID>/tag_key_short_name,
     * 'tag_value_short_name')". or "resource.matchTagId('tagKeys/key_id',
     * 'tagValues/value_id')". where key_name and value_name are the resource
     * names for Label Keys and Values. These names are available from the Tag
     * Manager Service. An example expression is:
     * "resource.matchTag('123456789/environment,
     * 'prod')". or "resource.matchTagId('tagKeys/123',
     * 'tagValues/456')".
     *
     * Generated from protobuf field <code>.google.type.Expr condition = 5;</code>
     */
    private $condition = null;
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OrgPolicy\V2\PolicySpec\PolicyRule\StringValues $values
     *           List of values to be used for this PolicyRule. This field can be set
     *           only in Policies for list constraints.
     *     @type bool $allow_all
     *           Setting this to true means that all values are allowed. This field can
     *           be set only in Policies for list constraints.
     *     @type bool $deny_all
     *           Setting this to true means that all values are denied. This field can
     *           be set only in Policies for list constraints.
     *     @type bool $enforce
     *           If `true`, then the `Policy` is enforced. If `false`, then any
     *           configuration is acceptable.
     *           This field can be set only in Policies for boolean constraints.
     *     @type \Google\Type\Expr $condition
     *           A condition which determines whether this rule is used
     *           in the evaluation of the policy. When set, the `expression` field in
     *           the `Expr' must include from 1 to 10 subexpressions, joined by the "||"
     *           or "&&" operators. Each subexpression must be of the form
     *           "resource.matchTag('<ORG_ID>/tag_key_short_name,
     *           'tag_value_short_name')". or "resource.matchTagId('tagKeys/key_id',
     *           'tagValues/value_id')". where key_name and value_name are the resource
     *           names for Label Keys and Values. These names are available from the Tag
     *           Manager Service. An example expression is:
     *           "resource.matchTag('123456789/environment,
     *           'prod')". or "resource.matchTagId('tagKeys/123',
     *           'tagValues/456')".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * List of values to be used for this PolicyRule. This field can be set
     * only in Policies for list constraints.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.PolicySpec.PolicyRule.StringValues values = 1;</code>
     * @return \Google\Cloud\OrgPolicy\V2\PolicySpec\PolicyRule\StringValues|null
     */
    public function getValues()
    {
        return $this->readOneof(1);
    }

    public function hasValues()
    {
        return $this->hasOneof(1);
    }

    /**
     * List of values to be used for this PolicyRule. This field can be set
     * only in Policies for list constraints.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.PolicySpec.PolicyRule.StringValues values = 1;</code>
     * @param \Google\Cloud\OrgPolicy\V2\PolicySpec\PolicyRule\StringValues $var
     * @return $this
     */
    public function setValues($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OrgPolicy\V2\PolicySpec\PolicyRule\StringValues::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Setting this to true means that all values are allowed. This field can
     * be set only in Policies for list constraints.
     *
     * Generated from protobuf field <code>bool allow_all = 2;</code>
     * @return bool
     */
    public function getAllowAll()
    {
        return $this->readOneof(2);
    }

    public function hasAllowAll()
    {
        return $this->hasOneof(2);
    }

    /**
     * Setting this to true means that all values are allowed. This field can
     * be set only in Policies for list constraints.
     *
     * Generated from protobuf field <code>bool allow_all = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowAll($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Setting this to true means that all values are denied. This field can
     * be set only in Policies for list constraints.
     *
     * Generated from protobuf field <code>bool deny_all = 3;</code>
     * @return bool
     */
    public function getDenyAll()
    {
        return $this->readOneof(3);
    }

    public function hasDenyAll()
    {
        return $this->hasOneof(3);
    }

    /**
     * Setting this to true means that all values are denied. This field can
     * be set only in Policies for list constraints.
     *
     * Generated from protobuf field <code>bool deny_all = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDenyAll($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * If `true`, then the `Policy` is enforced. If `false`, then any
     * configuration is acceptable.
     * This field can be set only in Policies for boolean constraints.
     *
     * Generated from protobuf field <code>bool enforce = 4;</code>
     * @return bool
     */
    public function getEnforce()
    {
        return $this->readOneof(4);
    }

    public function hasEnforce()
    {
        return $this->hasOneof(4);
    }

    /**
     * If `true`, then the `Policy` is enforced. If `false`, then any
     * configuration is acceptable.
     * This field can be set only in Policies for boolean constraints.
     *
     * Generated from protobuf field <code>bool enforce = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnforce($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A condition which determines whether this rule is used
     * in the evaluation of the policy. When set, the `expression` field in
     * the `Expr' must include from 1 to 10 subexpressions, joined by the "||"
     * or "&&" operators. Each subexpression must be of the form
     * "resource.matchTag('<ORG_ID>/tag_key_short_name,
     * 'tag_value_short_name')". or "resource.matchTagId('tagKeys/key_id',
     * 'tagValues/value_id')". where key_name and value_name are the resource
     * names for Label Keys and Values. These names are available from the Tag
     * Manager Service. An example expression is:
     * "resource.matchTag('123456789/environment,
     * 'prod')". or "resource.matchTagId('tagKeys/123',
     * 'tagValues/456')".
     *
     * Generated from protobuf field <code>.google.type.Expr condition = 5;</code>
     * @return \Google\Type\Expr|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * A condition which determines whether this rule is used
     * in the evaluation of the policy. When set, the `expression` field in
     * the `Expr' must include from 1 to 10 subexpressions, joined by the "||"
     * or "&&" operators. Each subexpression must be of the form
     * "resource.matchTag('<ORG_ID>/tag_key_short_name,
     * 'tag_value_short_name')". or "resource.matchTagId('tagKeys/key_id',
     * 'tagValues/value_id')". where key_name and value_name are the resource
     * names for Label Keys and Values. These names are available from the Tag
     * Manager Service. An example expression is:
     * "resource.matchTag('123456789/environment,
     * 'prod')". or "resource.matchTagId('tagKeys/123',
     * 'tagValues/456')".
     *
     * Generated from protobuf field <code>.google.type.Expr condition = 5;</code>
     * @param \Google\Type\Expr $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Expr::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PolicyRule::class, \Google\Cloud\OrgPolicy\V2\PolicySpec_PolicyRule::class);

