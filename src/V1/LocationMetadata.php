<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata about locations
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.LocationMetadata</code>
 */
class LocationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * List of supported features
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.LocationFeature location_features = 1;</code>
     */
    private $location_features;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $location_features
     *           List of supported features
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * List of supported features
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.LocationFeature location_features = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocationFeatures()
    {
        return $this->location_features;
    }

    /**
     * List of supported features
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.LocationFeature location_features = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocationFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\NetworkConnectivity\V1\LocationFeature::class);
        $this->location_features = $arr;

        return $this;
    }

}

