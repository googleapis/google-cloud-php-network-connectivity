<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [HubService.RejectSpokeUpdate][google.cloud.networkconnectivity.v1.HubService.RejectSpokeUpdate].
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.RejectSpokeUpdateRequest</code>
 */
class RejectSpokeUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the hub to reject spoke update.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The URI of the spoke to reject update.
     *
     * Generated from protobuf field <code>string spoke_uri = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $spoke_uri = '';
    /**
     * Required. The etag of the spoke to reject update.
     *
     * Generated from protobuf field <code>string spoke_etag = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $spoke_etag = '';
    /**
     * Optional. Additional information provided by the hub administrator.
     *
     * Generated from protobuf field <code>string details = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $details = '';
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
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string $name      Required. The name of the hub to reject spoke update. Please see
     *                          {@see HubServiceClient::hubName()} for help formatting this field.
     * @param string $spokeUri  Required. The URI of the spoke to reject update. Please see
     *                          {@see HubServiceClient::spokeName()} for help formatting this field.
     * @param string $spokeEtag Required. The etag of the spoke to reject update.
     *
     * @return \Google\Cloud\NetworkConnectivity\V1\RejectSpokeUpdateRequest
     *
     * @experimental
     */
    public static function build(string $name, string $spokeUri, string $spokeEtag): self
    {
        return (new self())
            ->setName($name)
            ->setSpokeUri($spokeUri)
            ->setSpokeEtag($spokeEtag);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the hub to reject spoke update.
     *     @type string $spoke_uri
     *           Required. The URI of the spoke to reject update.
     *     @type string $spoke_etag
     *           Required. The etag of the spoke to reject update.
     *     @type string $details
     *           Optional. Additional information provided by the hub administrator.
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
     * Required. The name of the hub to reject spoke update.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the hub to reject spoke update.
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
     * Required. The URI of the spoke to reject update.
     *
     * Generated from protobuf field <code>string spoke_uri = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSpokeUri()
    {
        return $this->spoke_uri;
    }

    /**
     * Required. The URI of the spoke to reject update.
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
     * Required. The etag of the spoke to reject update.
     *
     * Generated from protobuf field <code>string spoke_etag = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSpokeEtag()
    {
        return $this->spoke_etag;
    }

    /**
     * Required. The etag of the spoke to reject update.
     *
     * Generated from protobuf field <code>string spoke_etag = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSpokeEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->spoke_etag = $var;

        return $this;
    }

    /**
     * Optional. Additional information provided by the hub administrator.
     *
     * Generated from protobuf field <code>string details = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Optional. Additional information provided by the hub administrator.
     *
     * Generated from protobuf field <code>string details = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

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
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
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
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
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

