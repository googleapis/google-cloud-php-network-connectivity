<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [HubService.ListSpokes][google.cloud.networkconnectivity.v1.HubService.ListSpokes].
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.ListSpokesResponse</code>
 */
class ListSpokesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The requested spokes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.Spoke spokes = 1;</code>
     */
    private $spokes;
    /**
     * The next pagination token in the List response. It should be used as
     * page_token for the following request. An empty value means no more result.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\NetworkConnectivity\V1\Spoke>|\Google\Protobuf\Internal\RepeatedField $spokes
     *           The requested spokes.
     *     @type string $next_page_token
     *           The next pagination token in the List response. It should be used as
     *           page_token for the following request. An empty value means no more result.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * The requested spokes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.Spoke spokes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpokes()
    {
        return $this->spokes;
    }

    /**
     * The requested spokes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.Spoke spokes = 1;</code>
     * @param array<\Google\Cloud\NetworkConnectivity\V1\Spoke>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpokes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkConnectivity\V1\Spoke::class);
        $this->spokes = $arr;

        return $this;
    }

    /**
     * The next pagination token in the List response. It should be used as
     * page_token for the following request. An empty value means no more result.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The next pagination token in the List response. It should be used as
     * page_token for the following request. An empty value means no more result.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

