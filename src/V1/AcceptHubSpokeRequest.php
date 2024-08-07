<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [HubService.AcceptHubSpoke][google.cloud.networkconnectivity.v1.HubService.AcceptHubSpoke].
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.AcceptHubSpokeRequest</code>
 */
class AcceptHubSpokeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the hub into which to accept the spoke.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The URI of the spoke to accept into the hub.
     *
     * Generated from protobuf field <code>string spoke_uri = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $spoke_uri = '';
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID so
     * that if you must retry your request, the server knows to ignore the request
     * if it has already been completed. The server guarantees that a request
     * doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check to see whether the original operation
     * was received. If it was, the server ignores the second request. This
     * behavior prevents clients from mistakenly creating duplicate commitments.
     * The request ID must be a valid UUID, with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string $name     Required. The name of the hub into which to accept the spoke. Please see
     *                         {@see HubServiceClient::hubName()} for help formatting this field.
     * @param string $spokeUri Required. The URI of the spoke to accept into the hub. Please see
     *                         {@see HubServiceClient::spokeName()} for help formatting this field.
     *
     * @return \Google\Cloud\NetworkConnectivity\V1\AcceptHubSpokeRequest
     *
     * @experimental
     */
    public static function build(string $name, string $spokeUri): self
    {
        return (new self())
            ->setName($name)
            ->setSpokeUri($spokeUri);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the hub into which to accept the spoke.
     *     @type string $spoke_uri
     *           Required. The URI of the spoke to accept into the hub.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID so
     *           that if you must retry your request, the server knows to ignore the request
     *           if it has already been completed. The server guarantees that a request
     *           doesn't result in creation of duplicate commitments for at least 60
     *           minutes.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check to see whether the original operation
     *           was received. If it was, the server ignores the second request. This
     *           behavior prevents clients from mistakenly creating duplicate commitments.
     *           The request ID must be a valid UUID, with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the hub into which to accept the spoke.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the hub into which to accept the spoke.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The URI of the spoke to accept into the hub.
     *
     * Generated from protobuf field <code>string spoke_uri = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSpokeUri()
    {
        return $this->spoke_uri;
    }

    /**
     * Required. The URI of the spoke to accept into the hub.
     *
     * Generated from protobuf field <code>string spoke_uri = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSpokeUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->spoke_uri = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID so
     * that if you must retry your request, the server knows to ignore the request
     * if it has already been completed. The server guarantees that a request
     * doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check to see whether the original operation
     * was received. If it was, the server ignores the second request. This
     * behavior prevents clients from mistakenly creating duplicate commitments.
     * The request ID must be a valid UUID, with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID so
     * that if you must retry your request, the server knows to ignore the request
     * if it has already been completed. The server guarantees that a request
     * doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check to see whether the original operation
     * was received. If it was, the server ignores the second request. This
     * behavior prevents clients from mistakenly creating duplicate commitments.
     * The request ID must be a valid UUID, with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

