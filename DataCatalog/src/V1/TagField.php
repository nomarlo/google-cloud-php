<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/tags.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains the value and additional information on a field within
 * a [Tag][google.cloud.datacatalog.v1.Tag].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.TagField</code>
 */
class TagField extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The display name of this field.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $display_name = '';
    /**
     * Output only. The order of this field with respect to other fields in this tag. Can be
     * set by [Tag][google.cloud.datacatalog.v1.TagTemplateField.order].
     * For example, a higher value can indicate a more important field.
     * The value can be negative. Multiple fields can have the same order, and
     * field orders within a tag don't have to be sequential.
     *
     * Generated from protobuf field <code>int32 order = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $order = 0;
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Output only. The display name of this field.
     *     @type float $double_value
     *           The value of a tag field with a double type.
     *     @type string $string_value
     *           The value of a tag field with a string type.
     *           The maximum length is 2000 UTF-8 characters.
     *     @type bool $bool_value
     *           The value of a tag field with a boolean type.
     *     @type \Google\Protobuf\Timestamp $timestamp_value
     *           The value of a tag field with a timestamp type.
     *     @type \Google\Cloud\DataCatalog\V1\TagField\EnumValue $enum_value
     *           The value of a tag field with an enum type.
     *           This value must be one of the allowed values listed in this enum.
     *     @type string $richtext_value
     *           The value of a tag field with a rich text type.
     *           The maximum length is 10 MiB as this value holds HTML descriptions
     *           including encoded images. The maximum length of the text without images
     *           is 100 KiB.
     *     @type int $order
     *           Output only. The order of this field with respect to other fields in this tag. Can be
     *           set by [Tag][google.cloud.datacatalog.v1.TagTemplateField.order].
     *           For example, a higher value can indicate a more important field.
     *           The value can be negative. Multiple fields can have the same order, and
     *           field orders within a tag don't have to be sequential.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Tags::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The display name of this field.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The display name of this field.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The value of a tag field with a double type.
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(2);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * The value of a tag field with a double type.
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The value of a tag field with a string type.
     * The maximum length is 2000 UTF-8 characters.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(3);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * The value of a tag field with a string type.
     * The maximum length is 2000 UTF-8 characters.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The value of a tag field with a boolean type.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(4);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * The value of a tag field with a boolean type.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The value of a tag field with a timestamp type.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp_value = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestampValue()
    {
        return $this->readOneof(5);
    }

    public function hasTimestampValue()
    {
        return $this->hasOneof(5);
    }

    /**
     * The value of a tag field with a timestamp type.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp_value = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestampValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The value of a tag field with an enum type.
     * This value must be one of the allowed values listed in this enum.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagField.EnumValue enum_value = 6;</code>
     * @return \Google\Cloud\DataCatalog\V1\TagField\EnumValue|null
     */
    public function getEnumValue()
    {
        return $this->readOneof(6);
    }

    public function hasEnumValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * The value of a tag field with an enum type.
     * This value must be one of the allowed values listed in this enum.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagField.EnumValue enum_value = 6;</code>
     * @param \Google\Cloud\DataCatalog\V1\TagField\EnumValue $var
     * @return $this
     */
    public function setEnumValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\TagField\EnumValue::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The value of a tag field with a rich text type.
     * The maximum length is 10 MiB as this value holds HTML descriptions
     * including encoded images. The maximum length of the text without images
     * is 100 KiB.
     *
     * Generated from protobuf field <code>string richtext_value = 8;</code>
     * @return string
     */
    public function getRichtextValue()
    {
        return $this->readOneof(8);
    }

    public function hasRichtextValue()
    {
        return $this->hasOneof(8);
    }

    /**
     * The value of a tag field with a rich text type.
     * The maximum length is 10 MiB as this value holds HTML descriptions
     * including encoded images. The maximum length of the text without images
     * is 100 KiB.
     *
     * Generated from protobuf field <code>string richtext_value = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setRichtextValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Output only. The order of this field with respect to other fields in this tag. Can be
     * set by [Tag][google.cloud.datacatalog.v1.TagTemplateField.order].
     * For example, a higher value can indicate a more important field.
     * The value can be negative. Multiple fields can have the same order, and
     * field orders within a tag don't have to be sequential.
     *
     * Generated from protobuf field <code>int32 order = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Output only. The order of this field with respect to other fields in this tag. Can be
     * set by [Tag][google.cloud.datacatalog.v1.TagTemplateField.order].
     * For example, a higher value can indicate a more important field.
     * The value can be negative. Multiple fields can have the same order, and
     * field orders within a tag don't have to be sequential.
     *
     * Generated from protobuf field <code>int32 order = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->order = $var;

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

