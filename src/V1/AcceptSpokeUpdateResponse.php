<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [HubService.AcceptSpokeUpdate][google.cloud.networkconnectivity.v1.HubService.AcceptSpokeUpdate].
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.AcceptSpokeUpdateResponse</code>
 */
class AcceptSpokeUpdateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The spoke that was operated on.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.Spoke spoke = 1;</code>
     */
    protected $spoke = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\NetworkConnectivity\V1\Spoke $spoke
     *           The spoke that was operated on.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * The spoke that was operated on.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.Spoke spoke = 1;</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\Spoke|null
     */
    public function getSpoke()
    {
        return $this->spoke;
    }

    public function hasSpoke()
    {
        return isset($this->spoke);
    }

    public function clearSpoke()
    {
        unset($this->spoke);
    }

    /**
     * The spoke that was operated on.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.Spoke spoke = 1;</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\Spoke $var
     * @return $this
     */
    public function setSpoke($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\Spoke::class);
        $this->spoke = $var;

        return $this;
    }

}

