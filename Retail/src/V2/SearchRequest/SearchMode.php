<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchRequest;

use UnexpectedValueException;

/**
 * The search mode of each search request.
 *
 * Protobuf type <code>google.cloud.retail.v2.SearchRequest.SearchMode</code>
 */
class SearchMode
{
    /**
     * Default value. In this case both product search and faceted search will
     * be performed. Both [SearchResponse.SearchResult] and
     * [SearchResponse.Facet] will be returned.
     *
     * Generated from protobuf enum <code>SEARCH_MODE_UNSPECIFIED = 0;</code>
     */
    const SEARCH_MODE_UNSPECIFIED = 0;
    /**
     * Only product search will be performed. The faceted search will be
     * disabled.
     * Only [SearchResponse.SearchResult] will be returned.
     * [SearchResponse.Facet] will not be returned, even if
     * [SearchRequest.facet_specs][google.cloud.retail.v2.SearchRequest.facet_specs]
     * or
     * [SearchRequest.dynamic_facet_spec][google.cloud.retail.v2.SearchRequest.dynamic_facet_spec]
     * is set.
     *
     * Generated from protobuf enum <code>PRODUCT_SEARCH_ONLY = 1;</code>
     */
    const PRODUCT_SEARCH_ONLY = 1;
    /**
     * Only faceted search will be performed. The product search will be
     * disabled.
     * When in this mode, one or both of
     * [SearchRequest.facet_specs][google.cloud.retail.v2.SearchRequest.facet_specs]
     * and
     * [SearchRequest.dynamic_facet_spec][google.cloud.retail.v2.SearchRequest.dynamic_facet_spec]
     * should be set. Otherwise, an INVALID_ARGUMENT error is returned. Only
     * [SearchResponse.Facet] will be returned. [SearchResponse.SearchResult]
     * will not be returned.
     *
     * Generated from protobuf enum <code>FACETED_SEARCH_ONLY = 2;</code>
     */
    const FACETED_SEARCH_ONLY = 2;

    private static $valueToName = [
        self::SEARCH_MODE_UNSPECIFIED => 'SEARCH_MODE_UNSPECIFIED',
        self::PRODUCT_SEARCH_ONLY => 'PRODUCT_SEARCH_ONLY',
        self::FACETED_SEARCH_ONLY => 'FACETED_SEARCH_ONLY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


