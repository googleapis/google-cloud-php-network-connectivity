<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An existing VPC network.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.LinkedVpcNetwork</code>
 */
class LinkedVpcNetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The URI of the VPC network resource.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $uri = '';
    /**
     * Optional. IP ranges encompassing the subnets to be excluded from peering.
     *
     * Generated from protobuf field <code>repeated string exclude_export_ranges = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $exclude_export_ranges;
    /**
     * Optional. IP ranges allowed to be included from peering.
     *
     * Generated from protobuf field <code>repeated string include_export_ranges = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $include_export_ranges;
    /**
     * Optional. The proposed include export IP ranges waiting for hub
     * administration's approval.
     *
     * Generated from protobuf field <code>repeated string proposed_include_export_ranges = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $proposed_include_export_ranges;
    /**
     * Output only. The proposed exclude export IP ranges waiting for hub
     * administration's approval.
     *
     * Generated from protobuf field <code>repeated string proposed_exclude_export_ranges = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $proposed_exclude_export_ranges;
    /**
     * Output only. The list of Producer VPC spokes that this VPC spoke is a
     * service consumer VPC spoke for. These producer VPCs are connected through
     * VPC peering to this spoke's backing VPC network. Because they are directly
     * connected throuh VPC peering, NCC export filters do not apply between the
     * service consumer VPC spoke and any of its producer VPC spokes. This VPC
     * spoke cannot be deleted as long as any of these producer VPC spokes are
     * connected to the NCC Hub.
     *
     * Generated from protobuf field <code>repeated string producer_vpc_spokes = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $producer_vpc_spokes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. The URI of the VPC network resource.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $exclude_export_ranges
     *           Optional. IP ranges encompassing the subnets to be excluded from peering.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $include_export_ranges
     *           Optional. IP ranges allowed to be included from peering.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $proposed_include_export_ranges
     *           Optional. The proposed include export IP ranges waiting for hub
     *           administration's approval.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $proposed_exclude_export_ranges
     *           Output only. The proposed exclude export IP ranges waiting for hub
     *           administration's approval.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $producer_vpc_spokes
     *           Output only. The list of Producer VPC spokes that this VPC spoke is a
     *           service consumer VPC spoke for. These producer VPCs are connected through
     *           VPC peering to this spoke's backing VPC network. Because they are directly
     *           connected throuh VPC peering, NCC export filters do not apply between the
     *           service consumer VPC spoke and any of its producer VPC spokes. This VPC
     *           spoke cannot be deleted as long as any of these producer VPC spokes are
     *           connected to the NCC Hub.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The URI of the VPC network resource.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. The URI of the VPC network resource.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Optional. IP ranges encompassing the subnets to be excluded from peering.
     *
     * Generated from protobuf field <code>repeated string exclude_export_ranges = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludeExportRanges()
    {
        return $this->exclude_export_ranges;
    }

    /**
     * Optional. IP ranges encompassing the subnets to be excluded from peering.
     *
     * Generated from protobuf field <code>repeated string exclude_export_ranges = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludeExportRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclude_export_ranges = $arr;

        return $this;
    }

    /**
     * Optional. IP ranges allowed to be included from peering.
     *
     * Generated from protobuf field <code>repeated string include_export_ranges = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeExportRanges()
    {
        return $this->include_export_ranges;
    }

    /**
     * Optional. IP ranges allowed to be included from peering.
     *
     * Generated from protobuf field <code>repeated string include_export_ranges = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeExportRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_export_ranges = $arr;

        return $this;
    }

    /**
     * Optional. The proposed include export IP ranges waiting for hub
     * administration's approval.
     *
     * Generated from protobuf field <code>repeated string proposed_include_export_ranges = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProposedIncludeExportRanges()
    {
        return $this->proposed_include_export_ranges;
    }

    /**
     * Optional. The proposed include export IP ranges waiting for hub
     * administration's approval.
     *
     * Generated from protobuf field <code>repeated string proposed_include_export_ranges = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProposedIncludeExportRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->proposed_include_export_ranges = $arr;

        return $this;
    }

    /**
     * Output only. The proposed exclude export IP ranges waiting for hub
     * administration's approval.
     *
     * Generated from protobuf field <code>repeated string proposed_exclude_export_ranges = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProposedExcludeExportRanges()
    {
        return $this->proposed_exclude_export_ranges;
    }

    /**
     * Output only. The proposed exclude export IP ranges waiting for hub
     * administration's approval.
     *
     * Generated from protobuf field <code>repeated string proposed_exclude_export_ranges = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProposedExcludeExportRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->proposed_exclude_export_ranges = $arr;

        return $this;
    }

    /**
     * Output only. The list of Producer VPC spokes that this VPC spoke is a
     * service consumer VPC spoke for. These producer VPCs are connected through
     * VPC peering to this spoke's backing VPC network. Because they are directly
     * connected throuh VPC peering, NCC export filters do not apply between the
     * service consumer VPC spoke and any of its producer VPC spokes. This VPC
     * spoke cannot be deleted as long as any of these producer VPC spokes are
     * connected to the NCC Hub.
     *
     * Generated from protobuf field <code>repeated string producer_vpc_spokes = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProducerVpcSpokes()
    {
        return $this->producer_vpc_spokes;
    }

    /**
     * Output only. The list of Producer VPC spokes that this VPC spoke is a
     * service consumer VPC spoke for. These producer VPCs are connected through
     * VPC peering to this spoke's backing VPC network. Because they are directly
     * connected throuh VPC peering, NCC export filters do not apply between the
     * service consumer VPC spoke and any of its producer VPC spokes. This VPC
     * spoke cannot be deleted as long as any of these producer VPC spokes are
     * connected to the NCC Hub.
     *
     * Generated from protobuf field <code>repeated string producer_vpc_spokes = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProducerVpcSpokes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->producer_vpc_spokes = $arr;

        return $this;
    }

}

