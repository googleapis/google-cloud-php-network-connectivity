<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/cross_network_automation.proto

namespace Google\Cloud\NetworkConnectivity\V1\ServiceConnectionMap\ConsumerPscConfig;

use UnexpectedValueException;

/**
 * PSC Consumer Config State.
 *
 * Protobuf type <code>google.cloud.networkconnectivity.v1.ServiceConnectionMap.ConsumerPscConfig.State</code>
 */
class State
{
    /**
     * Default state, when Connection Map is created initially.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Set when policy and map configuration is valid,
     * and their matching can lead to allowing creation of PSC Connections
     * subject to other constraints like connections limit.
     *
     * Generated from protobuf enum <code>VALID = 1;</code>
     */
    const VALID = 1;
    /**
     * No Service Connection Policy found for this network and Service
     * Class
     *
     * Generated from protobuf enum <code>CONNECTION_POLICY_MISSING = 2;</code>
     */
    const CONNECTION_POLICY_MISSING = 2;
    /**
     * Service Connection Policy limit reached for this network and Service
     * Class
     *
     * Generated from protobuf enum <code>POLICY_LIMIT_REACHED = 3;</code>
     */
    const POLICY_LIMIT_REACHED = 3;
    /**
     * The consumer instance project is not in
     * AllowedGoogleProducersResourceHierarchyLevels of the matching
     * ServiceConnectionPolicy.
     *
     * Generated from protobuf enum <code>CONSUMER_INSTANCE_PROJECT_NOT_ALLOWLISTED = 4;</code>
     */
    const CONSUMER_INSTANCE_PROJECT_NOT_ALLOWLISTED = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::VALID => 'VALID',
        self::CONNECTION_POLICY_MISSING => 'CONNECTION_POLICY_MISSING',
        self::POLICY_LIMIT_REACHED => 'POLICY_LIMIT_REACHED',
        self::CONSUMER_INSTANCE_PROJECT_NOT_ALLOWLISTED => 'CONSUMER_INSTANCE_PROJECT_NOT_ALLOWLISTED',
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


