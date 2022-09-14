<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/document.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A knowledge document to be used by a [KnowledgeBase][google.cloud.dialogflow.v2.KnowledgeBase].
 * For more information, see the [knowledge base
 * guide](https://cloud.google.com/dialogflow/docs/how/knowledge-bases).
 * Note: The `projects.agent.knowledgeBases.documents` resource is deprecated;
 * only use `projects.knowledgeBases.documents`.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Document</code>
 */
class Document extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The document resource name.
     * The name must be empty when creating a document.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $name = '';
    /**
     * Required. The display name of the document. The name must be 1024 bytes or
     * less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Required. The MIME type of this document.
     *
     * Generated from protobuf field <code>string mime_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mime_type = '';
    /**
     * Required. The knowledge type of document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Document.KnowledgeType knowledge_types = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $knowledge_types;
    /**
     * Optional. If true, we try to automatically reload the document every day
     * (at a time picked by the system). If false or unspecified, we don't try
     * to automatically reload the document.
     * Currently you can only enable automatic reload for documents sourced from
     * a public url, see `source` field for the source types.
     * Reload status can be tracked in `latest_reload_status`. If a reload
     * fails, we will keep the document unchanged.
     * If a reload fails with internal errors, the system will try to reload the
     * document on the next day.
     * If a reload fails with non-retriable errors (e.g. PERMISION_DENIED), the
     * system will not try to reload the document anymore. You need to manually
     * reload the document successfully by calling `ReloadDocument` and clear the
     * errors.
     *
     * Generated from protobuf field <code>bool enable_auto_reload = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enable_auto_reload = false;
    /**
     * Output only. The time and status of the latest reload.
     * This reload may have been triggered automatically or manually
     * and may not have succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Document.ReloadStatus latest_reload_status = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $latest_reload_status = null;
    /**
     * Optional. Metadata for the document. The metadata supports arbitrary
     * key-value pairs. Suggested use cases include storing a document's title,
     * an external URL distinct from the document's content_uri, etc.
     * The max size of a `key` or a `value` of the metadata is 1024 bytes.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $metadata;
    /**
     * Output only. The current state of the document.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Document.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. The document resource name.
     *           The name must be empty when creating a document.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *     @type string $display_name
     *           Required. The display name of the document. The name must be 1024 bytes or
     *           less; otherwise, the creation request fails.
     *     @type string $mime_type
     *           Required. The MIME type of this document.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $knowledge_types
     *           Required. The knowledge type of document content.
     *     @type string $content_uri
     *           The URI where the file content is located.
     *           For documents stored in Google Cloud Storage, these URIs must have
     *           the form `gs://<bucket-name>/<object-name>`.
     *           NOTE: External URLs must correspond to public webpages, i.e., they must
     *           be indexed by Google Search. In particular, URLs for showing documents in
     *           Google Cloud Storage (i.e. the URL in your browser) are not supported.
     *           Instead use the `gs://` format URI described above.
     *     @type string $raw_content
     *           The raw content of the document. This field is only permitted for
     *           EXTRACTIVE_QA and FAQ knowledge types.
     *     @type bool $enable_auto_reload
     *           Optional. If true, we try to automatically reload the document every day
     *           (at a time picked by the system). If false or unspecified, we don't try
     *           to automatically reload the document.
     *           Currently you can only enable automatic reload for documents sourced from
     *           a public url, see `source` field for the source types.
     *           Reload status can be tracked in `latest_reload_status`. If a reload
     *           fails, we will keep the document unchanged.
     *           If a reload fails with internal errors, the system will try to reload the
     *           document on the next day.
     *           If a reload fails with non-retriable errors (e.g. PERMISION_DENIED), the
     *           system will not try to reload the document anymore. You need to manually
     *           reload the document successfully by calling `ReloadDocument` and clear the
     *           errors.
     *     @type \Google\Cloud\Dialogflow\V2\Document\ReloadStatus $latest_reload_status
     *           Output only. The time and status of the latest reload.
     *           This reload may have been triggered automatically or manually
     *           and may not have succeeded.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Optional. Metadata for the document. The metadata supports arbitrary
     *           key-value pairs. Suggested use cases include storing a document's title,
     *           an external URL distinct from the document's content_uri, etc.
     *           The max size of a `key` or a `value` of the metadata is 1024 bytes.
     *     @type int $state
     *           Output only. The current state of the document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The document resource name.
     * The name must be empty when creating a document.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. The document resource name.
     * The name must be empty when creating a document.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The display name of the document. The name must be 1024 bytes or
     * less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the document. The name must be 1024 bytes or
     * less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The MIME type of this document.
     *
     * Generated from protobuf field <code>string mime_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Required. The MIME type of this document.
     *
     * Generated from protobuf field <code>string mime_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Required. The knowledge type of document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Document.KnowledgeType knowledge_types = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKnowledgeTypes()
    {
        return $this->knowledge_types;
    }

    /**
     * Required. The knowledge type of document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Document.KnowledgeType knowledge_types = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKnowledgeTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dialogflow\V2\Document\KnowledgeType::class);
        $this->knowledge_types = $arr;

        return $this;
    }

    /**
     * The URI where the file content is located.
     * For documents stored in Google Cloud Storage, these URIs must have
     * the form `gs://<bucket-name>/<object-name>`.
     * NOTE: External URLs must correspond to public webpages, i.e., they must
     * be indexed by Google Search. In particular, URLs for showing documents in
     * Google Cloud Storage (i.e. the URL in your browser) are not supported.
     * Instead use the `gs://` format URI described above.
     *
     * Generated from protobuf field <code>string content_uri = 5;</code>
     * @return string
     */
    public function getContentUri()
    {
        return $this->readOneof(5);
    }

    public function hasContentUri()
    {
        return $this->hasOneof(5);
    }

    /**
     * The URI where the file content is located.
     * For documents stored in Google Cloud Storage, these URIs must have
     * the form `gs://<bucket-name>/<object-name>`.
     * NOTE: External URLs must correspond to public webpages, i.e., they must
     * be indexed by Google Search. In particular, URLs for showing documents in
     * Google Cloud Storage (i.e. the URL in your browser) are not supported.
     * Instead use the `gs://` format URI described above.
     *
     * Generated from protobuf field <code>string content_uri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setContentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The raw content of the document. This field is only permitted for
     * EXTRACTIVE_QA and FAQ knowledge types.
     *
     * Generated from protobuf field <code>bytes raw_content = 9;</code>
     * @return string
     */
    public function getRawContent()
    {
        return $this->readOneof(9);
    }

    public function hasRawContent()
    {
        return $this->hasOneof(9);
    }

    /**
     * The raw content of the document. This field is only permitted for
     * EXTRACTIVE_QA and FAQ knowledge types.
     *
     * Generated from protobuf field <code>bytes raw_content = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setRawContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Optional. If true, we try to automatically reload the document every day
     * (at a time picked by the system). If false or unspecified, we don't try
     * to automatically reload the document.
     * Currently you can only enable automatic reload for documents sourced from
     * a public url, see `source` field for the source types.
     * Reload status can be tracked in `latest_reload_status`. If a reload
     * fails, we will keep the document unchanged.
     * If a reload fails with internal errors, the system will try to reload the
     * document on the next day.
     * If a reload fails with non-retriable errors (e.g. PERMISION_DENIED), the
     * system will not try to reload the document anymore. You need to manually
     * reload the document successfully by calling `ReloadDocument` and clear the
     * errors.
     *
     * Generated from protobuf field <code>bool enable_auto_reload = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableAutoReload()
    {
        return $this->enable_auto_reload;
    }

    /**
     * Optional. If true, we try to automatically reload the document every day
     * (at a time picked by the system). If false or unspecified, we don't try
     * to automatically reload the document.
     * Currently you can only enable automatic reload for documents sourced from
     * a public url, see `source` field for the source types.
     * Reload status can be tracked in `latest_reload_status`. If a reload
     * fails, we will keep the document unchanged.
     * If a reload fails with internal errors, the system will try to reload the
     * document on the next day.
     * If a reload fails with non-retriable errors (e.g. PERMISION_DENIED), the
     * system will not try to reload the document anymore. You need to manually
     * reload the document successfully by calling `ReloadDocument` and clear the
     * errors.
     *
     * Generated from protobuf field <code>bool enable_auto_reload = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableAutoReload($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_auto_reload = $var;

        return $this;
    }

    /**
     * Output only. The time and status of the latest reload.
     * This reload may have been triggered automatically or manually
     * and may not have succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Document.ReloadStatus latest_reload_status = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dialogflow\V2\Document\ReloadStatus|null
     */
    public function getLatestReloadStatus()
    {
        return $this->latest_reload_status;
    }

    public function hasLatestReloadStatus()
    {
        return isset($this->latest_reload_status);
    }

    public function clearLatestReloadStatus()
    {
        unset($this->latest_reload_status);
    }

    /**
     * Output only. The time and status of the latest reload.
     * This reload may have been triggered automatically or manually
     * and may not have succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Document.ReloadStatus latest_reload_status = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dialogflow\V2\Document\ReloadStatus $var
     * @return $this
     */
    public function setLatestReloadStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Document\ReloadStatus::class);
        $this->latest_reload_status = $var;

        return $this;
    }

    /**
     * Optional. Metadata for the document. The metadata supports arbitrary
     * key-value pairs. Suggested use cases include storing a document's title,
     * an external URL distinct from the document's content_uri, etc.
     * The max size of a `key` or a `value` of the metadata is 1024 bytes.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Optional. Metadata for the document. The metadata supports arbitrary
     * key-value pairs. Suggested use cases include storing a document's title,
     * an external URL distinct from the document's content_uri, etc.
     * The max size of a `key` or a `value` of the metadata is 1024 bytes.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Output only. The current state of the document.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Document.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the document.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Document.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\Document\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

