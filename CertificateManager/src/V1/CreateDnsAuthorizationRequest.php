<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `CreateDnsAuthorization` method.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.CreateDnsAuthorizationRequest</code>
 */
class CreateDnsAuthorizationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the dns authorization. Must be in the format
     * `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. A user-provided name of the dns authorization.
     *
     * Generated from protobuf field <code>string dns_authorization_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dns_authorization_id = '';
    /**
     * Required. A definition of the dns authorization to create.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.DnsAuthorization dns_authorization = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dns_authorization = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the dns authorization. Must be in the format
     *           `projects/&#42;&#47;locations/&#42;`.
     *     @type string $dns_authorization_id
     *           Required. A user-provided name of the dns authorization.
     *     @type \Google\Cloud\CertificateManager\V1\DnsAuthorization $dns_authorization
     *           Required. A definition of the dns authorization to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the dns authorization. Must be in the format
     * `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the dns authorization. Must be in the format
     * `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. A user-provided name of the dns authorization.
     *
     * Generated from protobuf field <code>string dns_authorization_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDnsAuthorizationId()
    {
        return $this->dns_authorization_id;
    }

    /**
     * Required. A user-provided name of the dns authorization.
     *
     * Generated from protobuf field <code>string dns_authorization_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDnsAuthorizationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dns_authorization_id = $var;

        return $this;
    }

    /**
     * Required. A definition of the dns authorization to create.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.DnsAuthorization dns_authorization = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CertificateManager\V1\DnsAuthorization|null
     */
    public function getDnsAuthorization()
    {
        return $this->dns_authorization;
    }

    public function hasDnsAuthorization()
    {
        return isset($this->dns_authorization);
    }

    public function clearDnsAuthorization()
    {
        unset($this->dns_authorization);
    }

    /**
     * Required. A definition of the dns authorization to create.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.DnsAuthorization dns_authorization = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CertificateManager\V1\DnsAuthorization $var
     * @return $this
     */
    public function setDnsAuthorization($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CertificateManager\V1\DnsAuthorization::class);
        $this->dns_authorization = $var;

        return $this;
    }

}

