<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1beta1/budget_model.proto

namespace Google\Cloud\Billing\Budgets\V1beta1\ThresholdRule;

use UnexpectedValueException;

/**
 * The type of basis used to determine if spend has passed the threshold.
 *
 * Protobuf type <code>google.cloud.billing.budgets.v1beta1.ThresholdRule.Basis</code>
 */
class Basis
{
    /**
     * Unspecified threshold basis.
     *
     * Generated from protobuf enum <code>BASIS_UNSPECIFIED = 0;</code>
     */
    const BASIS_UNSPECIFIED = 0;
    /**
     * Use current spend as the basis for comparison against the threshold.
     *
     * Generated from protobuf enum <code>CURRENT_SPEND = 1;</code>
     */
    const CURRENT_SPEND = 1;
    /**
     * Use forecasted spend for the period as the basis for comparison against
     * the threshold.
     * FORECASTED_SPEND can only be set when the budget's time period is a
     * [Filter.calendar_period][google.cloud.billing.budgets.v1beta1.Filter.calendar_period].  It cannot be set in combination with
     * [Filter.custom_period][google.cloud.billing.budgets.v1beta1.Filter.custom_period].
     *
     * Generated from protobuf enum <code>FORECASTED_SPEND = 2;</code>
     */
    const FORECASTED_SPEND = 2;

    private static $valueToName = [
        self::BASIS_UNSPECIFIED => 'BASIS_UNSPECIFIED',
        self::CURRENT_SPEND => 'CURRENT_SPEND',
        self::FORECASTED_SPEND => 'FORECASTED_SPEND',
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


