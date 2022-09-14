<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An annotation that was generated during the customer and agent interaction.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.RuntimeAnnotation</code>
 */
class RuntimeAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the annotation.
     * Format:
     * projects/{project}/locations/{location}/conversationDatasets/{dataset}/conversationDataItems/{data_item}/conversationAnnotations/{annotation}
     *
     * Generated from protobuf field <code>string annotation_id = 1;</code>
     */
    private $annotation_id = '';
    /**
     * The time at which this annotation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     */
    private $create_time = null;
    /**
     * The boundary in the conversation where the annotation starts, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary start_boundary = 3;</code>
     */
    private $start_boundary = null;
    /**
     * The boundary in the conversation where the annotation ends, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary end_boundary = 4;</code>
     */
    private $end_boundary = null;
    /**
     * The feedback that the customer has about the answer in `data`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnswerFeedback answer_feedback = 5;</code>
     */
    private $answer_feedback = null;
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\ArticleSuggestionData $article_suggestion
     *           Agent Assist Article Suggestion data.
     *     @type \Google\Cloud\ContactCenterInsights\V1\FaqAnswerData $faq_answer
     *           Agent Assist FAQ answer data.
     *     @type \Google\Cloud\ContactCenterInsights\V1\SmartReplyData $smart_reply
     *           Agent Assist Smart Reply data.
     *     @type \Google\Cloud\ContactCenterInsights\V1\SmartComposeSuggestionData $smart_compose_suggestion
     *           Agent Assist Smart Compose suggestion data.
     *     @type \Google\Cloud\ContactCenterInsights\V1\DialogflowInteractionData $dialogflow_interaction
     *           Dialogflow interaction data.
     *     @type string $annotation_id
     *           The unique identifier of the annotation.
     *           Format:
     *           projects/{project}/locations/{location}/conversationDatasets/{dataset}/conversationDataItems/{data_item}/conversationAnnotations/{annotation}
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time at which this annotation was created.
     *     @type \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary $start_boundary
     *           The boundary in the conversation where the annotation starts, inclusive.
     *     @type \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary $end_boundary
     *           The boundary in the conversation where the annotation ends, inclusive.
     *     @type \Google\Cloud\ContactCenterInsights\V1\AnswerFeedback $answer_feedback
     *           The feedback that the customer has about the answer in `data`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Agent Assist Article Suggestion data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ArticleSuggestionData article_suggestion = 6;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\ArticleSuggestionData|null
     */
    public function getArticleSuggestion()
    {
        return $this->readOneof(6);
    }

    public function hasArticleSuggestion()
    {
        return $this->hasOneof(6);
    }

    /**
     * Agent Assist Article Suggestion data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ArticleSuggestionData article_suggestion = 6;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\ArticleSuggestionData $var
     * @return $this
     */
    public function setArticleSuggestion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\ArticleSuggestionData::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Agent Assist FAQ answer data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.FaqAnswerData faq_answer = 7;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\FaqAnswerData|null
     */
    public function getFaqAnswer()
    {
        return $this->readOneof(7);
    }

    public function hasFaqAnswer()
    {
        return $this->hasOneof(7);
    }

    /**
     * Agent Assist FAQ answer data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.FaqAnswerData faq_answer = 7;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\FaqAnswerData $var
     * @return $this
     */
    public function setFaqAnswer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\FaqAnswerData::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Agent Assist Smart Reply data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SmartReplyData smart_reply = 8;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\SmartReplyData|null
     */
    public function getSmartReply()
    {
        return $this->readOneof(8);
    }

    public function hasSmartReply()
    {
        return $this->hasOneof(8);
    }

    /**
     * Agent Assist Smart Reply data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SmartReplyData smart_reply = 8;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\SmartReplyData $var
     * @return $this
     */
    public function setSmartReply($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\SmartReplyData::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Agent Assist Smart Compose suggestion data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SmartComposeSuggestionData smart_compose_suggestion = 9;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\SmartComposeSuggestionData|null
     */
    public function getSmartComposeSuggestion()
    {
        return $this->readOneof(9);
    }

    public function hasSmartComposeSuggestion()
    {
        return $this->hasOneof(9);
    }

    /**
     * Agent Assist Smart Compose suggestion data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SmartComposeSuggestionData smart_compose_suggestion = 9;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\SmartComposeSuggestionData $var
     * @return $this
     */
    public function setSmartComposeSuggestion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\SmartComposeSuggestionData::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Dialogflow interaction data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.DialogflowInteractionData dialogflow_interaction = 10;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\DialogflowInteractionData|null
     */
    public function getDialogflowInteraction()
    {
        return $this->readOneof(10);
    }

    public function hasDialogflowInteraction()
    {
        return $this->hasOneof(10);
    }

    /**
     * Dialogflow interaction data.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.DialogflowInteractionData dialogflow_interaction = 10;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\DialogflowInteractionData $var
     * @return $this
     */
    public function setDialogflowInteraction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\DialogflowInteractionData::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * The unique identifier of the annotation.
     * Format:
     * projects/{project}/locations/{location}/conversationDatasets/{dataset}/conversationDataItems/{data_item}/conversationAnnotations/{annotation}
     *
     * Generated from protobuf field <code>string annotation_id = 1;</code>
     * @return string
     */
    public function getAnnotationId()
    {
        return $this->annotation_id;
    }

    /**
     * The unique identifier of the annotation.
     * Format:
     * projects/{project}/locations/{location}/conversationDatasets/{dataset}/conversationDataItems/{data_item}/conversationAnnotations/{annotation}
     *
     * Generated from protobuf field <code>string annotation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_id = $var;

        return $this;
    }

    /**
     * The time at which this annotation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The time at which this annotation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The boundary in the conversation where the annotation starts, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary start_boundary = 3;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary|null
     */
    public function getStartBoundary()
    {
        return $this->start_boundary;
    }

    public function hasStartBoundary()
    {
        return isset($this->start_boundary);
    }

    public function clearStartBoundary()
    {
        unset($this->start_boundary);
    }

    /**
     * The boundary in the conversation where the annotation starts, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary start_boundary = 3;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary $var
     * @return $this
     */
    public function setStartBoundary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary::class);
        $this->start_boundary = $var;

        return $this;
    }

    /**
     * The boundary in the conversation where the annotation ends, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary end_boundary = 4;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary|null
     */
    public function getEndBoundary()
    {
        return $this->end_boundary;
    }

    public function hasEndBoundary()
    {
        return isset($this->end_boundary);
    }

    public function clearEndBoundary()
    {
        unset($this->end_boundary);
    }

    /**
     * The boundary in the conversation where the annotation ends, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary end_boundary = 4;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary $var
     * @return $this
     */
    public function setEndBoundary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary::class);
        $this->end_boundary = $var;

        return $this;
    }

    /**
     * The feedback that the customer has about the answer in `data`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnswerFeedback answer_feedback = 5;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\AnswerFeedback|null
     */
    public function getAnswerFeedback()
    {
        return $this->answer_feedback;
    }

    public function hasAnswerFeedback()
    {
        return isset($this->answer_feedback);
    }

    public function clearAnswerFeedback()
    {
        unset($this->answer_feedback);
    }

    /**
     * The feedback that the customer has about the answer in `data`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnswerFeedback answer_feedback = 5;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\AnswerFeedback $var
     * @return $this
     */
    public function setAnswerFeedback($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\AnswerFeedback::class);
        $this->answer_feedback = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}

