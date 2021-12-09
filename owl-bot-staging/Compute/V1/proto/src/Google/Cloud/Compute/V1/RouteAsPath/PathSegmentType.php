<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\RouteAsPath;

use UnexpectedValueException;

/**
 * [Output Only] The type of the AS Path, which can be one of the following values: - 'AS_SET': unordered set of autonomous systems that the route in has traversed - 'AS_SEQUENCE': ordered set of autonomous systems that the route has traversed - 'AS_CONFED_SEQUENCE': ordered set of Member Autonomous Systems in the local confederation that the route has traversed - 'AS_CONFED_SET': unordered set of Member Autonomous Systems in the local confederation that the route has traversed 
 *
 * Protobuf type <code>google.cloud.compute.v1.RouteAsPath.PathSegmentType</code>
 */
class PathSegmentType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PATH_SEGMENT_TYPE = 0;</code>
     */
    const UNDEFINED_PATH_SEGMENT_TYPE = 0;
    /**
     * Generated from protobuf enum <code>AS_CONFED_SEQUENCE = 222152624;</code>
     */
    const AS_CONFED_SEQUENCE = 222152624;
    /**
     * Generated from protobuf enum <code>AS_CONFED_SET = 374040307;</code>
     */
    const AS_CONFED_SET = 374040307;
    /**
     * Generated from protobuf enum <code>AS_SEQUENCE = 106735918;</code>
     */
    const AS_SEQUENCE = 106735918;
    /**
     * Generated from protobuf enum <code>AS_SET = 329846453;</code>
     */
    const AS_SET = 329846453;

    private static $valueToName = [
        self::UNDEFINED_PATH_SEGMENT_TYPE => 'UNDEFINED_PATH_SEGMENT_TYPE',
        self::AS_CONFED_SEQUENCE => 'AS_CONFED_SEQUENCE',
        self::AS_CONFED_SET => 'AS_CONFED_SET',
        self::AS_SEQUENCE => 'AS_SEQUENCE',
        self::AS_SET => 'AS_SET',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PathSegmentType::class, \Google\Cloud\Compute\V1\RouteAsPath_PathSegmentType::class);

