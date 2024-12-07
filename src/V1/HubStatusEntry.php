<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A hub status entry represents the status of a set of propagated Private
 * Service Connect connections grouped by certain fields.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.HubStatusEntry</code>
 */
class HubStatusEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of propagated Private Service Connect connections with this
     * status. If the `group_by` field was not set in the request message, the
     * value of this field is 1.
     *
     * Generated from protobuf field <code>int32 count = 1;</code>
     */
    protected $count = 0;
    /**
     * The fields that this entry is grouped by. This has the same value as the
     * `group_by` field in the request message.
     *
     * Generated from protobuf field <code>string group_by = 2;</code>
     */
    protected $group_by = '';
    /**
     * The Private Service Connect propagation status.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PscPropagationStatus psc_propagation_status = 3;</code>
     */
    protected $psc_propagation_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $count
     *           The number of propagated Private Service Connect connections with this
     *           status. If the `group_by` field was not set in the request message, the
     *           value of this field is 1.
     *     @type string $group_by
     *           The fields that this entry is grouped by. This has the same value as the
     *           `group_by` field in the request message.
     *     @type \Google\Cloud\NetworkConnectivity\V1\PscPropagationStatus $psc_propagation_status
     *           The Private Service Connect propagation status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of propagated Private Service Connect connections with this
     * status. If the `group_by` field was not set in the request message, the
     * value of this field is 1.
     *
     * Generated from protobuf field <code>int32 count = 1;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * The number of propagated Private Service Connect connections with this
     * status. If the `group_by` field was not set in the request message, the
     * value of this field is 1.
     *
     * Generated from protobuf field <code>int32 count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * The fields that this entry is grouped by. This has the same value as the
     * `group_by` field in the request message.
     *
     * Generated from protobuf field <code>string group_by = 2;</code>
     * @return string
     */
    public function getGroupBy()
    {
        return $this->group_by;
    }

    /**
     * The fields that this entry is grouped by. This has the same value as the
     * `group_by` field in the request message.
     *
     * Generated from protobuf field <code>string group_by = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_by = $var;

        return $this;
    }

    /**
     * The Private Service Connect propagation status.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PscPropagationStatus psc_propagation_status = 3;</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\PscPropagationStatus|null
     */
    public function getPscPropagationStatus()
    {
        return $this->psc_propagation_status;
    }

    public function hasPscPropagationStatus()
    {
        return isset($this->psc_propagation_status);
    }

    public function clearPscPropagationStatus()
    {
        unset($this->psc_propagation_status);
    }

    /**
     * The Private Service Connect propagation status.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PscPropagationStatus psc_propagation_status = 3;</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\PscPropagationStatus $var
     * @return $this
     */
    public function setPscPropagationStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\PscPropagationStatus::class);
        $this->psc_propagation_status = $var;

        return $this;
    }

}
