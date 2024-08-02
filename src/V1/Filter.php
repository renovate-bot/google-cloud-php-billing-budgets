<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1/budget_model.proto

namespace Google\Cloud\Billing\Budgets\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A filter for a budget, limiting the scope of the cost to calculate.
 *
 * Generated from protobuf message <code>google.cloud.billing.budgets.v1.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A set of projects of the form `projects/{project}`,
     * specifying that usage from only this set of projects should be
     * included in the budget. If omitted, the report includes all usage for
     * the billing account, regardless of which project the usage occurred on.
     *
     * Generated from protobuf field <code>repeated string projects = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $projects;
    /**
     * Optional. A set of folder and organization names of the form
     * `folders/{folderId}` or `organizations/{organizationId}`, specifying that
     * usage from only this set of folders and organizations should be included in
     * the budget. If omitted, the budget includes all usage that the billing
     * account pays for. If the folder or organization contains projects that are
     * paid for by a different Cloud Billing account, the budget *doesn't* apply
     * to those projects.
     *
     * Generated from protobuf field <code>repeated string resource_ancestors = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $resource_ancestors;
    /**
     * Optional. If
     * [Filter.credit_types_treatment][google.cloud.billing.budgets.v1.Filter.credit_types_treatment]
     * is INCLUDE_SPECIFIED_CREDITS, this is a list of credit types to be
     * subtracted from gross cost to determine the spend for threshold
     * calculations. See [a list of acceptable credit type
     * values](https://cloud.google.com/billing/docs/how-to/export-data-bigquery-tables#credits-type).
     * If
     * [Filter.credit_types_treatment][google.cloud.billing.budgets.v1.Filter.credit_types_treatment]
     * is **not** INCLUDE_SPECIFIED_CREDITS, this field must be empty.
     *
     * Generated from protobuf field <code>repeated string credit_types = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $credit_types;
    /**
     * Optional. If not set, default behavior is `INCLUDE_ALL_CREDITS`.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.Filter.CreditTypesTreatment credit_types_treatment = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $credit_types_treatment = 0;
    /**
     * Optional. A set of services of the form `services/{service_id}`,
     * specifying that usage from only this set of services should be
     * included in the budget. If omitted, the report includes usage for
     * all the services.
     * The service names are available through the Catalog API:
     * https://cloud.google.com/billing/v1/how-tos/catalog-api.
     *
     * Generated from protobuf field <code>repeated string services = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $services;
    /**
     * Optional. A set of subaccounts of the form `billingAccounts/{account_id}`,
     * specifying that usage from only this set of subaccounts should be included
     * in the budget. If a subaccount is set to the name of the parent account,
     * usage from the parent account is included. If the field is omitted,
     * the report includes usage from the parent account and all subaccounts,
     * if they exist.
     *
     * Generated from protobuf field <code>repeated string subaccounts = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $subaccounts;
    /**
     * Optional. A single label and value pair specifying that usage from only
     * this set of labeled resources should be included in the budget. If omitted,
     * the report includes all labeled and unlabeled usage.
     * An object containing a single `"key": value` pair. Example: `{ "name":
     * "wrench" }`.
     *  _Currently, multiple entries or multiple values per entry are not
     *  allowed._
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    protected $usage_period;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $projects
     *           Optional. A set of projects of the form `projects/{project}`,
     *           specifying that usage from only this set of projects should be
     *           included in the budget. If omitted, the report includes all usage for
     *           the billing account, regardless of which project the usage occurred on.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $resource_ancestors
     *           Optional. A set of folder and organization names of the form
     *           `folders/{folderId}` or `organizations/{organizationId}`, specifying that
     *           usage from only this set of folders and organizations should be included in
     *           the budget. If omitted, the budget includes all usage that the billing
     *           account pays for. If the folder or organization contains projects that are
     *           paid for by a different Cloud Billing account, the budget *doesn't* apply
     *           to those projects.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $credit_types
     *           Optional. If
     *           [Filter.credit_types_treatment][google.cloud.billing.budgets.v1.Filter.credit_types_treatment]
     *           is INCLUDE_SPECIFIED_CREDITS, this is a list of credit types to be
     *           subtracted from gross cost to determine the spend for threshold
     *           calculations. See [a list of acceptable credit type
     *           values](https://cloud.google.com/billing/docs/how-to/export-data-bigquery-tables#credits-type).
     *           If
     *           [Filter.credit_types_treatment][google.cloud.billing.budgets.v1.Filter.credit_types_treatment]
     *           is **not** INCLUDE_SPECIFIED_CREDITS, this field must be empty.
     *     @type int $credit_types_treatment
     *           Optional. If not set, default behavior is `INCLUDE_ALL_CREDITS`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $services
     *           Optional. A set of services of the form `services/{service_id}`,
     *           specifying that usage from only this set of services should be
     *           included in the budget. If omitted, the report includes usage for
     *           all the services.
     *           The service names are available through the Catalog API:
     *           https://cloud.google.com/billing/v1/how-tos/catalog-api.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $subaccounts
     *           Optional. A set of subaccounts of the form `billingAccounts/{account_id}`,
     *           specifying that usage from only this set of subaccounts should be included
     *           in the budget. If a subaccount is set to the name of the parent account,
     *           usage from the parent account is included. If the field is omitted,
     *           the report includes usage from the parent account and all subaccounts,
     *           if they exist.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. A single label and value pair specifying that usage from only
     *           this set of labeled resources should be included in the budget. If omitted,
     *           the report includes all labeled and unlabeled usage.
     *           An object containing a single `"key": value` pair. Example: `{ "name":
     *           "wrench" }`.
     *            _Currently, multiple entries or multiple values per entry are not
     *            allowed._
     *     @type int $calendar_period
     *           Optional. Specifies to track usage for recurring calendar period.
     *           For example, assume that CalendarPeriod.QUARTER is set. The budget
     *           tracks usage from April 1 to June 30, when the current calendar month is
     *           April, May, June. After that, it tracks usage from July 1 to
     *           September 30 when the current calendar month is July, August, September,
     *           so on.
     *     @type \Google\Cloud\Billing\Budgets\V1\CustomPeriod $custom_period
     *           Optional. Specifies to track usage from any start date (required) to any
     *           end date (optional). This time period is static, it does not recur.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\Budgets\V1\BudgetModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A set of projects of the form `projects/{project}`,
     * specifying that usage from only this set of projects should be
     * included in the budget. If omitted, the report includes all usage for
     * the billing account, regardless of which project the usage occurred on.
     *
     * Generated from protobuf field <code>repeated string projects = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Optional. A set of projects of the form `projects/{project}`,
     * specifying that usage from only this set of projects should be
     * included in the budget. If omitted, the report includes all usage for
     * the billing account, regardless of which project the usage occurred on.
     *
     * Generated from protobuf field <code>repeated string projects = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProjects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->projects = $arr;

        return $this;
    }

    /**
     * Optional. A set of folder and organization names of the form
     * `folders/{folderId}` or `organizations/{organizationId}`, specifying that
     * usage from only this set of folders and organizations should be included in
     * the budget. If omitted, the budget includes all usage that the billing
     * account pays for. If the folder or organization contains projects that are
     * paid for by a different Cloud Billing account, the budget *doesn't* apply
     * to those projects.
     *
     * Generated from protobuf field <code>repeated string resource_ancestors = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceAncestors()
    {
        return $this->resource_ancestors;
    }

    /**
     * Optional. A set of folder and organization names of the form
     * `folders/{folderId}` or `organizations/{organizationId}`, specifying that
     * usage from only this set of folders and organizations should be included in
     * the budget. If omitted, the budget includes all usage that the billing
     * account pays for. If the folder or organization contains projects that are
     * paid for by a different Cloud Billing account, the budget *doesn't* apply
     * to those projects.
     *
     * Generated from protobuf field <code>repeated string resource_ancestors = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceAncestors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_ancestors = $arr;

        return $this;
    }

    /**
     * Optional. If
     * [Filter.credit_types_treatment][google.cloud.billing.budgets.v1.Filter.credit_types_treatment]
     * is INCLUDE_SPECIFIED_CREDITS, this is a list of credit types to be
     * subtracted from gross cost to determine the spend for threshold
     * calculations. See [a list of acceptable credit type
     * values](https://cloud.google.com/billing/docs/how-to/export-data-bigquery-tables#credits-type).
     * If
     * [Filter.credit_types_treatment][google.cloud.billing.budgets.v1.Filter.credit_types_treatment]
     * is **not** INCLUDE_SPECIFIED_CREDITS, this field must be empty.
     *
     * Generated from protobuf field <code>repeated string credit_types = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCreditTypes()
    {
        return $this->credit_types;
    }

    /**
     * Optional. If
     * [Filter.credit_types_treatment][google.cloud.billing.budgets.v1.Filter.credit_types_treatment]
     * is INCLUDE_SPECIFIED_CREDITS, this is a list of credit types to be
     * subtracted from gross cost to determine the spend for threshold
     * calculations. See [a list of acceptable credit type
     * values](https://cloud.google.com/billing/docs/how-to/export-data-bigquery-tables#credits-type).
     * If
     * [Filter.credit_types_treatment][google.cloud.billing.budgets.v1.Filter.credit_types_treatment]
     * is **not** INCLUDE_SPECIFIED_CREDITS, this field must be empty.
     *
     * Generated from protobuf field <code>repeated string credit_types = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCreditTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->credit_types = $arr;

        return $this;
    }

    /**
     * Optional. If not set, default behavior is `INCLUDE_ALL_CREDITS`.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.Filter.CreditTypesTreatment credit_types_treatment = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getCreditTypesTreatment()
    {
        return $this->credit_types_treatment;
    }

    /**
     * Optional. If not set, default behavior is `INCLUDE_ALL_CREDITS`.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.Filter.CreditTypesTreatment credit_types_treatment = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setCreditTypesTreatment($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Billing\Budgets\V1\Filter\CreditTypesTreatment::class);
        $this->credit_types_treatment = $var;

        return $this;
    }

    /**
     * Optional. A set of services of the form `services/{service_id}`,
     * specifying that usage from only this set of services should be
     * included in the budget. If omitted, the report includes usage for
     * all the services.
     * The service names are available through the Catalog API:
     * https://cloud.google.com/billing/v1/how-tos/catalog-api.
     *
     * Generated from protobuf field <code>repeated string services = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Optional. A set of services of the form `services/{service_id}`,
     * specifying that usage from only this set of services should be
     * included in the budget. If omitted, the report includes usage for
     * all the services.
     * The service names are available through the Catalog API:
     * https://cloud.google.com/billing/v1/how-tos/catalog-api.
     *
     * Generated from protobuf field <code>repeated string services = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->services = $arr;

        return $this;
    }

    /**
     * Optional. A set of subaccounts of the form `billingAccounts/{account_id}`,
     * specifying that usage from only this set of subaccounts should be included
     * in the budget. If a subaccount is set to the name of the parent account,
     * usage from the parent account is included. If the field is omitted,
     * the report includes usage from the parent account and all subaccounts,
     * if they exist.
     *
     * Generated from protobuf field <code>repeated string subaccounts = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubaccounts()
    {
        return $this->subaccounts;
    }

    /**
     * Optional. A set of subaccounts of the form `billingAccounts/{account_id}`,
     * specifying that usage from only this set of subaccounts should be included
     * in the budget. If a subaccount is set to the name of the parent account,
     * usage from the parent account is included. If the field is omitted,
     * the report includes usage from the parent account and all subaccounts,
     * if they exist.
     *
     * Generated from protobuf field <code>repeated string subaccounts = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubaccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->subaccounts = $arr;

        return $this;
    }

    /**
     * Optional. A single label and value pair specifying that usage from only
     * this set of labeled resources should be included in the budget. If omitted,
     * the report includes all labeled and unlabeled usage.
     * An object containing a single `"key": value` pair. Example: `{ "name":
     * "wrench" }`.
     *  _Currently, multiple entries or multiple values per entry are not
     *  allowed._
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. A single label and value pair specifying that usage from only
     * this set of labeled resources should be included in the budget. If omitted,
     * the report includes all labeled and unlabeled usage.
     * An object containing a single `"key": value` pair. Example: `{ "name":
     * "wrench" }`.
     *  _Currently, multiple entries or multiple values per entry are not
     *  allowed._
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\ListValue::class);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Specifies to track usage for recurring calendar period.
     * For example, assume that CalendarPeriod.QUARTER is set. The budget
     * tracks usage from April 1 to June 30, when the current calendar month is
     * April, May, June. After that, it tracks usage from July 1 to
     * September 30 when the current calendar month is July, August, September,
     * so on.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.CalendarPeriod calendar_period = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getCalendarPeriod()
    {
        return $this->readOneof(8);
    }

    public function hasCalendarPeriod()
    {
        return $this->hasOneof(8);
    }

    /**
     * Optional. Specifies to track usage for recurring calendar period.
     * For example, assume that CalendarPeriod.QUARTER is set. The budget
     * tracks usage from April 1 to June 30, when the current calendar month is
     * April, May, June. After that, it tracks usage from July 1 to
     * September 30 when the current calendar month is July, August, September,
     * so on.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.CalendarPeriod calendar_period = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setCalendarPeriod($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Billing\Budgets\V1\CalendarPeriod::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Optional. Specifies to track usage from any start date (required) to any
     * end date (optional). This time period is static, it does not recur.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.CustomPeriod custom_period = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Billing\Budgets\V1\CustomPeriod|null
     */
    public function getCustomPeriod()
    {
        return $this->readOneof(9);
    }

    public function hasCustomPeriod()
    {
        return $this->hasOneof(9);
    }

    /**
     * Optional. Specifies to track usage from any start date (required) to any
     * end date (optional). This time period is static, it does not recur.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.CustomPeriod custom_period = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Billing\Budgets\V1\CustomPeriod $var
     * @return $this
     */
    public function setCustomPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Billing\Budgets\V1\CustomPeriod::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getUsagePeriod()
    {
        return $this->whichOneof("usage_period");
    }

}

