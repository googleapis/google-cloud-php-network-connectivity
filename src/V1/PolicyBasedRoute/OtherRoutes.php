<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/policy_based_routing.proto

namespace Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute;

use UnexpectedValueException;

/**
 * The other routing cases.
 *
 * Protobuf type <code>google.cloud.networkconnectivity.v1.PolicyBasedRoute.OtherRoutes</code>
 */
class OtherRoutes
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>OTHER_ROUTES_UNSPECIFIED = 0;</code>
     */
    const OTHER_ROUTES_UNSPECIFIED = 0;
    /**
     * Use the routes from the default routing tables (system-generated routes,
     * custom routes, peering route) to determine the next hop. This effectively
     * excludes matching packets being applied on other PBRs with a lower
     * priority.
     *
     * Generated from protobuf enum <code>DEFAULT_ROUTING = 1;</code>
     */
    const DEFAULT_ROUTING = 1;

    private static $valueToName = [
        self::OTHER_ROUTES_UNSPECIFIED => 'OTHER_ROUTES_UNSPECIFIED',
        self::DEFAULT_ROUTING => 'DEFAULT_ROUTING',
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


