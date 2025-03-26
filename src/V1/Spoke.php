<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Network Connectivity Center spoke represents one or more network
 * connectivity resources.
 * When you create a spoke, you associate it with a hub. You must also
 * identify a value for exactly one of the following fields:
 * * linked_vpn_tunnels
 * * linked_interconnect_attachments
 * * linked_router_appliance_instances
 * * linked_vpc_network
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.Spoke</code>
 */
class Spoke extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The name of the spoke. Spoke names must be unique. They use the
     * following form:
     *     `projects/{project_number}/locations/{region}/spokes/{spoke_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Output only. The time the spoke was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time the spoke was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional labels in key-value pair format. For more information about
     * labels, see [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * Optional. An optional description of the spoke.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Immutable. The name of the hub that this spoke is attached to.
     *
     * Generated from protobuf field <code>string hub = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $hub = '';
    /**
     * Optional. The name of the group that this spoke is associated with.
     *
     * Generated from protobuf field <code>string group = 23 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $group = '';
    /**
     * Optional. VPN tunnels that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedVpnTunnels linked_vpn_tunnels = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $linked_vpn_tunnels = null;
    /**
     * Optional. VLAN attachments that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedInterconnectAttachments linked_interconnect_attachments = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $linked_interconnect_attachments = null;
    /**
     * Optional. Router appliance instances that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedRouterApplianceInstances linked_router_appliance_instances = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $linked_router_appliance_instances = null;
    /**
     * Optional. VPC network that is associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedVpcNetwork linked_vpc_network = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $linked_vpc_network = null;
    /**
     * Optional. The linked producer VPC that is associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedProducerVpcNetwork linked_producer_vpc_network = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $linked_producer_vpc_network = null;
    /**
     * Output only. The Google-generated UUID for the spoke. This value is unique
     * across all spoke resources. If a spoke is deleted and another with the same
     * name is created, the new spoke is assigned a different `unique_id`.
     *
     * Generated from protobuf field <code>string unique_id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $unique_id = '';
    /**
     * Output only. The current lifecycle state of this spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The reasons for current state of the spoke.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.Spoke.StateReason reasons = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $reasons;
    /**
     * Output only. The type of resource associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.SpokeType spoke_type = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $spoke_type = 0;
    /**
     * Optional. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    /**
     * Optional. The list of fields waiting for hub administration's approval.
     *
     * Generated from protobuf field <code>repeated string field_paths_pending_update = 28 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $field_paths_pending_update;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The name of the spoke. Spoke names must be unique. They use the
     *           following form:
     *               `projects/{project_number}/locations/{region}/spokes/{spoke_id}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the spoke was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time the spoke was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional labels in key-value pair format. For more information about
     *           labels, see [Requirements for
     *           labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *     @type string $description
     *           Optional. An optional description of the spoke.
     *     @type string $hub
     *           Immutable. The name of the hub that this spoke is attached to.
     *     @type string $group
     *           Optional. The name of the group that this spoke is associated with.
     *     @type \Google\Cloud\NetworkConnectivity\V1\LinkedVpnTunnels $linked_vpn_tunnels
     *           Optional. VPN tunnels that are associated with the spoke.
     *     @type \Google\Cloud\NetworkConnectivity\V1\LinkedInterconnectAttachments $linked_interconnect_attachments
     *           Optional. VLAN attachments that are associated with the spoke.
     *     @type \Google\Cloud\NetworkConnectivity\V1\LinkedRouterApplianceInstances $linked_router_appliance_instances
     *           Optional. Router appliance instances that are associated with the spoke.
     *     @type \Google\Cloud\NetworkConnectivity\V1\LinkedVpcNetwork $linked_vpc_network
     *           Optional. VPC network that is associated with the spoke.
     *     @type \Google\Cloud\NetworkConnectivity\V1\LinkedProducerVpcNetwork $linked_producer_vpc_network
     *           Optional. The linked producer VPC that is associated with the spoke.
     *     @type string $unique_id
     *           Output only. The Google-generated UUID for the spoke. This value is unique
     *           across all spoke resources. If a spoke is deleted and another with the same
     *           name is created, the new spoke is assigned a different `unique_id`.
     *     @type int $state
     *           Output only. The current lifecycle state of this spoke.
     *     @type array<\Google\Cloud\NetworkConnectivity\V1\Spoke\StateReason>|\Google\Protobuf\Internal\RepeatedField $reasons
     *           Output only. The reasons for current state of the spoke.
     *     @type int $spoke_type
     *           Output only. The type of resource associated with the spoke.
     *     @type string $etag
     *           Optional. This checksum is computed by the server based on the value of
     *           other fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $field_paths_pending_update
     *           Optional. The list of fields waiting for hub administration's approval.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The name of the spoke. Spoke names must be unique. They use the
     * following form:
     *     `projects/{project_number}/locations/{region}/spokes/{spoke_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The name of the spoke. Spoke names must be unique. They use the
     * following form:
     *     `projects/{project_number}/locations/{region}/spokes/{spoke_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Output only. The time the spoke was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the spoke was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the spoke was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time the spoke was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional labels in key-value pair format. For more information about
     * labels, see [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional labels in key-value pair format. For more information about
     * labels, see [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. An optional description of the spoke.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. An optional description of the spoke.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Immutable. The name of the hub that this spoke is attached to.
     *
     * Generated from protobuf field <code>string hub = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getHub()
    {
        return $this->hub;
    }

    /**
     * Immutable. The name of the hub that this spoke is attached to.
     *
     * Generated from protobuf field <code>string hub = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setHub($var)
    {
        GPBUtil::checkString($var, True);
        $this->hub = $var;

        return $this;
    }

    /**
     * Optional. The name of the group that this spoke is associated with.
     *
     * Generated from protobuf field <code>string group = 23 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Optional. The name of the group that this spoke is associated with.
     *
     * Generated from protobuf field <code>string group = 23 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

    /**
     * Optional. VPN tunnels that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedVpnTunnels linked_vpn_tunnels = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\LinkedVpnTunnels|null
     */
    public function getLinkedVpnTunnels()
    {
        return $this->linked_vpn_tunnels;
    }

    public function hasLinkedVpnTunnels()
    {
        return isset($this->linked_vpn_tunnels);
    }

    public function clearLinkedVpnTunnels()
    {
        unset($this->linked_vpn_tunnels);
    }

    /**
     * Optional. VPN tunnels that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedVpnTunnels linked_vpn_tunnels = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\LinkedVpnTunnels $var
     * @return $this
     */
    public function setLinkedVpnTunnels($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\LinkedVpnTunnels::class);
        $this->linked_vpn_tunnels = $var;

        return $this;
    }

    /**
     * Optional. VLAN attachments that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedInterconnectAttachments linked_interconnect_attachments = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\LinkedInterconnectAttachments|null
     */
    public function getLinkedInterconnectAttachments()
    {
        return $this->linked_interconnect_attachments;
    }

    public function hasLinkedInterconnectAttachments()
    {
        return isset($this->linked_interconnect_attachments);
    }

    public function clearLinkedInterconnectAttachments()
    {
        unset($this->linked_interconnect_attachments);
    }

    /**
     * Optional. VLAN attachments that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedInterconnectAttachments linked_interconnect_attachments = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\LinkedInterconnectAttachments $var
     * @return $this
     */
    public function setLinkedInterconnectAttachments($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\LinkedInterconnectAttachments::class);
        $this->linked_interconnect_attachments = $var;

        return $this;
    }

    /**
     * Optional. Router appliance instances that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedRouterApplianceInstances linked_router_appliance_instances = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\LinkedRouterApplianceInstances|null
     */
    public function getLinkedRouterApplianceInstances()
    {
        return $this->linked_router_appliance_instances;
    }

    public function hasLinkedRouterApplianceInstances()
    {
        return isset($this->linked_router_appliance_instances);
    }

    public function clearLinkedRouterApplianceInstances()
    {
        unset($this->linked_router_appliance_instances);
    }

    /**
     * Optional. Router appliance instances that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedRouterApplianceInstances linked_router_appliance_instances = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\LinkedRouterApplianceInstances $var
     * @return $this
     */
    public function setLinkedRouterApplianceInstances($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\LinkedRouterApplianceInstances::class);
        $this->linked_router_appliance_instances = $var;

        return $this;
    }

    /**
     * Optional. VPC network that is associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedVpcNetwork linked_vpc_network = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\LinkedVpcNetwork|null
     */
    public function getLinkedVpcNetwork()
    {
        return $this->linked_vpc_network;
    }

    public function hasLinkedVpcNetwork()
    {
        return isset($this->linked_vpc_network);
    }

    public function clearLinkedVpcNetwork()
    {
        unset($this->linked_vpc_network);
    }

    /**
     * Optional. VPC network that is associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedVpcNetwork linked_vpc_network = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\LinkedVpcNetwork $var
     * @return $this
     */
    public function setLinkedVpcNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\LinkedVpcNetwork::class);
        $this->linked_vpc_network = $var;

        return $this;
    }

    /**
     * Optional. The linked producer VPC that is associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedProducerVpcNetwork linked_producer_vpc_network = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\LinkedProducerVpcNetwork|null
     */
    public function getLinkedProducerVpcNetwork()
    {
        return $this->linked_producer_vpc_network;
    }

    public function hasLinkedProducerVpcNetwork()
    {
        return isset($this->linked_producer_vpc_network);
    }

    public function clearLinkedProducerVpcNetwork()
    {
        unset($this->linked_producer_vpc_network);
    }

    /**
     * Optional. The linked producer VPC that is associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedProducerVpcNetwork linked_producer_vpc_network = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\LinkedProducerVpcNetwork $var
     * @return $this
     */
    public function setLinkedProducerVpcNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\LinkedProducerVpcNetwork::class);
        $this->linked_producer_vpc_network = $var;

        return $this;
    }

    /**
     * Output only. The Google-generated UUID for the spoke. This value is unique
     * across all spoke resources. If a spoke is deleted and another with the same
     * name is created, the new spoke is assigned a different `unique_id`.
     *
     * Generated from protobuf field <code>string unique_id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * Output only. The Google-generated UUID for the spoke. This value is unique
     * across all spoke resources. If a spoke is deleted and another with the same
     * name is created, the new spoke is assigned a different `unique_id`.
     *
     * Generated from protobuf field <code>string unique_id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unique_id = $var;

        return $this;
    }

    /**
     * Output only. The current lifecycle state of this spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current lifecycle state of this spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkConnectivity\V1\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The reasons for current state of the spoke.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.Spoke.StateReason reasons = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReasons()
    {
        return $this->reasons;
    }

    /**
     * Output only. The reasons for current state of the spoke.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.Spoke.StateReason reasons = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\NetworkConnectivity\V1\Spoke\StateReason>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkConnectivity\V1\Spoke\StateReason::class);
        $this->reasons = $arr;

        return $this;
    }

    /**
     * Output only. The type of resource associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.SpokeType spoke_type = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSpokeType()
    {
        return $this->spoke_type;
    }

    /**
     * Output only. The type of resource associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.SpokeType spoke_type = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSpokeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkConnectivity\V1\SpokeType::class);
        $this->spoke_type = $var;

        return $this;
    }

    /**
     * Optional. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. The list of fields waiting for hub administration's approval.
     *
     * Generated from protobuf field <code>repeated string field_paths_pending_update = 28 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldPathsPendingUpdate()
    {
        return $this->field_paths_pending_update;
    }

    /**
     * Optional. The list of fields waiting for hub administration's approval.
     *
     * Generated from protobuf field <code>repeated string field_paths_pending_update = 28 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldPathsPendingUpdate($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->field_paths_pending_update = $arr;

        return $this;
    }

}

