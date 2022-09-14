<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Pseudonymization method that generates surrogates via cryptographic hashing.
 * Uses SHA-256.
 * The key size must be either 32 or 64 bytes.
 * Outputs a base64 encoded representation of the hashed output
 * (for example, L7k0BHmF1ha5U3NfGykjro4xWi1MPVQPjhMAZbSV9mM=).
 * Currently, only string and integer values can be hashed.
 * See https://cloud.google.com/dlp/docs/pseudonymization to learn more.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CryptoHashConfig</code>
 */
class CryptoHashConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The key used by the hash function.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CryptoKey crypto_key = 1;</code>
     */
    private $crypto_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\CryptoKey $crypto_key
     *           The key used by the hash function.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The key used by the hash function.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CryptoKey crypto_key = 1;</code>
     * @return \Google\Cloud\Dlp\V2\CryptoKey|null
     */
    public function getCryptoKey()
    {
        return $this->crypto_key;
    }

    public function hasCryptoKey()
    {
        return isset($this->crypto_key);
    }

    public function clearCryptoKey()
    {
        unset($this->crypto_key);
    }

    /**
     * The key used by the hash function.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CryptoKey crypto_key = 1;</code>
     * @param \Google\Cloud\Dlp\V2\CryptoKey $var
     * @return $this
     */
    public function setCryptoKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CryptoKey::class);
        $this->crypto_key = $var;

        return $this;
    }

}

