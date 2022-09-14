<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The HttpRouteRule setting specifies how to match an HTTP request and the corresponding routing action that load balancing proxies perform.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HttpRouteRule</code>
 */
class HttpRouteRule extends \Google\Protobuf\Internal\Message
{
    /**
     * The short description conveying the intent of this routeRule. The description can have a maximum length of 1024 characters.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Specifies changes to request and response headers that need to take effect for the selected backendService. The headerAction value specified here is applied before the matching pathMatchers[].headerAction and after pathMatchers[].routeRules[].routeAction.weightedBackendService.backendServiceWeightAction[].headerAction HeaderAction is not supported for load balancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpHeaderAction header_action = 328077352;</code>
     */
    private $header_action = null;
    /**
     * The list of criteria for matching attributes of a request to this routeRule. This list has OR semantics: the request matches this routeRule when any of the matchRules are satisfied. However predicates within a given matchRule have AND semantics. All predicates within a matchRule must match for the request to match the rule.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpRouteRuleMatch match_rules = 376200701;</code>
     */
    private $match_rules;
    /**
     * For routeRules within a given pathMatcher, priority determines the order in which a load balancer interprets routeRules. RouteRules are evaluated in order of priority, from the lowest to highest number. The priority of a rule decreases as its number increases (1, 2, 3, N+1). The first rule that matches the request is applied. You cannot configure two or more routeRules with the same priority. Priority for each rule must be set to a number from 0 to 2147483647 inclusive. Priority numbers can have gaps, which enable you to add or remove rules in the future without affecting the rest of the rules. For example, 1, 2, 3, 4, 5, 9, 12, 16 is a valid series of priority numbers to which you could add rules numbered from 6 to 8, 10 to 11, and 13 to 15 in the future without any impact on existing rules.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     */
    private $priority = null;
    /**
     * In response to a matching matchRule, the load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. If routeAction specifies any weightedBackendServices, service must not be set. Conversely if service is set, routeAction cannot contain any weightedBackendServices. Only one of urlRedirect, service or routeAction.weightedBackendService must be set. UrlMaps for external HTTP(S) load balancers support only the urlRewrite action within a route rule's routeAction.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRouteAction route_action = 424563948;</code>
     */
    private $route_action = null;
    /**
     * The full or partial URL of the backend service resource to which traffic is directed if this rule is matched. If routeAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. However, if service is specified, routeAction cannot contain any weightedBackendServices. Conversely, if routeAction specifies any weightedBackendServices, service must not be specified. Only one of urlRedirect, service or routeAction.weightedBackendService must be set.
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     */
    private $service = null;
    /**
     * When this rule is matched, the request is redirected to a URL specified by urlRedirect. If urlRedirect is specified, service or routeAction must not be set. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRedirectAction url_redirect = 405147820;</code>
     */
    private $url_redirect = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           The short description conveying the intent of this routeRule. The description can have a maximum length of 1024 characters.
     *     @type \Google\Cloud\Compute\V1\HttpHeaderAction $header_action
     *           Specifies changes to request and response headers that need to take effect for the selected backendService. The headerAction value specified here is applied before the matching pathMatchers[].headerAction and after pathMatchers[].routeRules[].routeAction.weightedBackendService.backendServiceWeightAction[].headerAction HeaderAction is not supported for load balancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *     @type array<\Google\Cloud\Compute\V1\HttpRouteRuleMatch>|\Google\Protobuf\Internal\RepeatedField $match_rules
     *           The list of criteria for matching attributes of a request to this routeRule. This list has OR semantics: the request matches this routeRule when any of the matchRules are satisfied. However predicates within a given matchRule have AND semantics. All predicates within a matchRule must match for the request to match the rule.
     *     @type int $priority
     *           For routeRules within a given pathMatcher, priority determines the order in which a load balancer interprets routeRules. RouteRules are evaluated in order of priority, from the lowest to highest number. The priority of a rule decreases as its number increases (1, 2, 3, N+1). The first rule that matches the request is applied. You cannot configure two or more routeRules with the same priority. Priority for each rule must be set to a number from 0 to 2147483647 inclusive. Priority numbers can have gaps, which enable you to add or remove rules in the future without affecting the rest of the rules. For example, 1, 2, 3, 4, 5, 9, 12, 16 is a valid series of priority numbers to which you could add rules numbered from 6 to 8, 10 to 11, and 13 to 15 in the future without any impact on existing rules.
     *     @type \Google\Cloud\Compute\V1\HttpRouteAction $route_action
     *           In response to a matching matchRule, the load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. If routeAction specifies any weightedBackendServices, service must not be set. Conversely if service is set, routeAction cannot contain any weightedBackendServices. Only one of urlRedirect, service or routeAction.weightedBackendService must be set. UrlMaps for external HTTP(S) load balancers support only the urlRewrite action within a route rule's routeAction.
     *     @type string $service
     *           The full or partial URL of the backend service resource to which traffic is directed if this rule is matched. If routeAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. However, if service is specified, routeAction cannot contain any weightedBackendServices. Conversely, if routeAction specifies any weightedBackendServices, service must not be specified. Only one of urlRedirect, service or routeAction.weightedBackendService must be set.
     *     @type \Google\Cloud\Compute\V1\HttpRedirectAction $url_redirect
     *           When this rule is matched, the request is redirected to a URL specified by urlRedirect. If urlRedirect is specified, service or routeAction must not be set. Not supported when the URL map is bound to a target gRPC proxy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The short description conveying the intent of this routeRule. The description can have a maximum length of 1024 characters.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * The short description conveying the intent of this routeRule. The description can have a maximum length of 1024 characters.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Specifies changes to request and response headers that need to take effect for the selected backendService. The headerAction value specified here is applied before the matching pathMatchers[].headerAction and after pathMatchers[].routeRules[].routeAction.weightedBackendService.backendServiceWeightAction[].headerAction HeaderAction is not supported for load balancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpHeaderAction header_action = 328077352;</code>
     * @return \Google\Cloud\Compute\V1\HttpHeaderAction|null
     */
    public function getHeaderAction()
    {
        return $this->header_action;
    }

    public function hasHeaderAction()
    {
        return isset($this->header_action);
    }

    public function clearHeaderAction()
    {
        unset($this->header_action);
    }

    /**
     * Specifies changes to request and response headers that need to take effect for the selected backendService. The headerAction value specified here is applied before the matching pathMatchers[].headerAction and after pathMatchers[].routeRules[].routeAction.weightedBackendService.backendServiceWeightAction[].headerAction HeaderAction is not supported for load balancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpHeaderAction header_action = 328077352;</code>
     * @param \Google\Cloud\Compute\V1\HttpHeaderAction $var
     * @return $this
     */
    public function setHeaderAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpHeaderAction::class);
        $this->header_action = $var;

        return $this;
    }

    /**
     * The list of criteria for matching attributes of a request to this routeRule. This list has OR semantics: the request matches this routeRule when any of the matchRules are satisfied. However predicates within a given matchRule have AND semantics. All predicates within a matchRule must match for the request to match the rule.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpRouteRuleMatch match_rules = 376200701;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMatchRules()
    {
        return $this->match_rules;
    }

    /**
     * The list of criteria for matching attributes of a request to this routeRule. This list has OR semantics: the request matches this routeRule when any of the matchRules are satisfied. However predicates within a given matchRule have AND semantics. All predicates within a matchRule must match for the request to match the rule.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpRouteRuleMatch match_rules = 376200701;</code>
     * @param array<\Google\Cloud\Compute\V1\HttpRouteRuleMatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMatchRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\HttpRouteRuleMatch::class);
        $this->match_rules = $arr;

        return $this;
    }

    /**
     * For routeRules within a given pathMatcher, priority determines the order in which a load balancer interprets routeRules. RouteRules are evaluated in order of priority, from the lowest to highest number. The priority of a rule decreases as its number increases (1, 2, 3, N+1). The first rule that matches the request is applied. You cannot configure two or more routeRules with the same priority. Priority for each rule must be set to a number from 0 to 2147483647 inclusive. Priority numbers can have gaps, which enable you to add or remove rules in the future without affecting the rest of the rules. For example, 1, 2, 3, 4, 5, 9, 12, 16 is a valid series of priority numbers to which you could add rules numbered from 6 to 8, 10 to 11, and 13 to 15 in the future without any impact on existing rules.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     * @return int
     */
    public function getPriority()
    {
        return isset($this->priority) ? $this->priority : 0;
    }

    public function hasPriority()
    {
        return isset($this->priority);
    }

    public function clearPriority()
    {
        unset($this->priority);
    }

    /**
     * For routeRules within a given pathMatcher, priority determines the order in which a load balancer interprets routeRules. RouteRules are evaluated in order of priority, from the lowest to highest number. The priority of a rule decreases as its number increases (1, 2, 3, N+1). The first rule that matches the request is applied. You cannot configure two or more routeRules with the same priority. Priority for each rule must be set to a number from 0 to 2147483647 inclusive. Priority numbers can have gaps, which enable you to add or remove rules in the future without affecting the rest of the rules. For example, 1, 2, 3, 4, 5, 9, 12, 16 is a valid series of priority numbers to which you could add rules numbered from 6 to 8, 10 to 11, and 13 to 15 in the future without any impact on existing rules.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * In response to a matching matchRule, the load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. If routeAction specifies any weightedBackendServices, service must not be set. Conversely if service is set, routeAction cannot contain any weightedBackendServices. Only one of urlRedirect, service or routeAction.weightedBackendService must be set. UrlMaps for external HTTP(S) load balancers support only the urlRewrite action within a route rule's routeAction.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRouteAction route_action = 424563948;</code>
     * @return \Google\Cloud\Compute\V1\HttpRouteAction|null
     */
    public function getRouteAction()
    {
        return $this->route_action;
    }

    public function hasRouteAction()
    {
        return isset($this->route_action);
    }

    public function clearRouteAction()
    {
        unset($this->route_action);
    }

    /**
     * In response to a matching matchRule, the load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. If routeAction specifies any weightedBackendServices, service must not be set. Conversely if service is set, routeAction cannot contain any weightedBackendServices. Only one of urlRedirect, service or routeAction.weightedBackendService must be set. UrlMaps for external HTTP(S) load balancers support only the urlRewrite action within a route rule's routeAction.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRouteAction route_action = 424563948;</code>
     * @param \Google\Cloud\Compute\V1\HttpRouteAction $var
     * @return $this
     */
    public function setRouteAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpRouteAction::class);
        $this->route_action = $var;

        return $this;
    }

    /**
     * The full or partial URL of the backend service resource to which traffic is directed if this rule is matched. If routeAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. However, if service is specified, routeAction cannot contain any weightedBackendServices. Conversely, if routeAction specifies any weightedBackendServices, service must not be specified. Only one of urlRedirect, service or routeAction.weightedBackendService must be set.
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     * @return string
     */
    public function getService()
    {
        return isset($this->service) ? $this->service : '';
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * The full or partial URL of the backend service resource to which traffic is directed if this rule is matched. If routeAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. However, if service is specified, routeAction cannot contain any weightedBackendServices. Conversely, if routeAction specifies any weightedBackendServices, service must not be specified. Only one of urlRedirect, service or routeAction.weightedBackendService must be set.
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * When this rule is matched, the request is redirected to a URL specified by urlRedirect. If urlRedirect is specified, service or routeAction must not be set. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRedirectAction url_redirect = 405147820;</code>
     * @return \Google\Cloud\Compute\V1\HttpRedirectAction|null
     */
    public function getUrlRedirect()
    {
        return $this->url_redirect;
    }

    public function hasUrlRedirect()
    {
        return isset($this->url_redirect);
    }

    public function clearUrlRedirect()
    {
        unset($this->url_redirect);
    }

    /**
     * When this rule is matched, the request is redirected to a URL specified by urlRedirect. If urlRedirect is specified, service or routeAction must not be set. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRedirectAction url_redirect = 405147820;</code>
     * @param \Google\Cloud\Compute\V1\HttpRedirectAction $var
     * @return $this
     */
    public function setUrlRedirect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpRedirectAction::class);
        $this->url_redirect = $var;

        return $this;
    }

}

