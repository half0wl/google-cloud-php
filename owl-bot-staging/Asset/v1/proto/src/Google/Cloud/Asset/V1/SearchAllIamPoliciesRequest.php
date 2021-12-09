<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Search all IAM policies request.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.SearchAllIamPoliciesRequest</code>
 */
class SearchAllIamPoliciesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A scope can be a project, a folder, or an organization. The search is
     * limited to the IAM policies within the `scope`. The caller must be granted
     * the
     * [`cloudasset.assets.searchAllIamPolicies`](https://cloud.google.com/asset-inventory/docs/access-control#required_permissions)
     * permission on the desired scope.
     * The allowed values are:
     * * projects/{PROJECT_ID} (e.g., "projects/foo-bar")
     * * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
     * * folders/{FOLDER_NUMBER} (e.g., "folders/1234567")
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $scope = '';
    /**
     * Optional. The query statement. See [how to construct a
     * query](https://cloud.google.com/asset-inventory/docs/searching-iam-policies#how_to_construct_a_query)
     * for more information. If not specified or empty, it will search all the
     * IAM policies within the specified `scope`. Note that the query string is
     * compared against each Cloud IAM policy binding, including its members,
     * roles, and Cloud IAM conditions. The returned Cloud IAM policies will only
     * contain the bindings that match your query. To learn more about the IAM
     * policy structure, see [IAM policy
     * doc](https://cloud.google.com/iam/docs/policies#structure).
     * Examples:
     * * `policy:amy&#64;gmail.com` to find IAM policy bindings that specify user
     *   "amy&#64;gmail.com".
     * * `policy:roles/compute.admin` to find IAM policy bindings that specify
     *   the Compute Admin role.
     * * `policy:comp*` to find IAM policy bindings that contain "comp" as a
     *   prefix of any word in the binding.
     * * `policy.role.permissions:storage.buckets.update` to find IAM policy
     *   bindings that specify a role containing "storage.buckets.update"
     *   permission. Note that if callers don't have `iam.roles.get` access to a
     *   role's included permissions, policy bindings that specify this role will
     *   be dropped from the search results.
     * * `policy.role.permissions:upd*` to find IAM policy bindings that specify a
     *   role containing "upd" as a prefix of any word in the role permission.
     *   Note that if callers don't have `iam.roles.get` access to a role's
     *   included permissions, policy bindings that specify this role will be
     *   dropped from the search results.
     * * `resource:organizations/123456` to find IAM policy bindings
     *   that are set on "organizations/123456".
     * * `resource=//cloudresourcemanager.googleapis.com/projects/myproject` to
     *   find IAM policy bindings that are set on the project named "myproject".
     * * `Important` to find IAM policy bindings that contain "Important" as a
     *   word in any of the searchable fields (except for the included
     *   permissions).
     * * `resource:(instance1 OR instance2) policy:amy` to find
     *   IAM policy bindings that are set on resources "instance1" or
     *   "instance2" and also specify user "amy".
     * * `roles:roles/compute.admin` to find IAM policy bindings that specify the
     *   Compute Admin role.
     * * `memberTypes:user` to find IAM policy bindings that contain the "user"
     *   member type.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $query = '';
    /**
     * Optional. The page size for search result pagination. Page size is capped at 500 even
     * if a larger value is given. If set to zero, server will pick an appropriate
     * default. Returned results may be fewer than requested. When this happens,
     * there could be more results as long as `next_page_token` is returned.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. If present, retrieve the next batch of results from the preceding call to
     * this method. `page_token` must be the value of `next_page_token` from the
     * previous response. The values of all other method parameters must be
     * identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. A list of asset types that the IAM policies are attached to. If empty, it
     * will search the IAM policies that are attached to all the [searchable asset
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#searchable_asset_types).
     * Regular expressions are also supported. For example:
     * * "compute.googleapis.com.*" snapshots IAM policies attached to asset type
     * starts with "compute.googleapis.com".
     * * ".*Instance" snapshots IAM policies attached to asset type ends with
     * "Instance".
     * * ".*Instance.*" snapshots IAM policies attached to asset type contains
     * "Instance".
     * See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     * regular expression syntax. If the regular expression does not match any
     * supported asset type, an INVALID_ARGUMENT error will be returned.
     *
     * Generated from protobuf field <code>repeated string asset_types = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $asset_types;
    /**
     * Optional. A comma-separated list of fields specifying the sorting order of the
     * results. The default order is ascending. Add " DESC" after the field name
     * to indicate descending order. Redundant space characters are ignored.
     * Example: "assetType DESC, resource".
     * Only singular primitive fields in the response are sortable:
     *   * resource
     *   * assetType
     *   * project
     * All the other fields such as repeated fields (e.g., `folders`) and
     * non-primitive fields (e.g., `policy`) are not supported.
     *
     * Generated from protobuf field <code>string order_by = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope
     *           Required. A scope can be a project, a folder, or an organization. The search is
     *           limited to the IAM policies within the `scope`. The caller must be granted
     *           the
     *           [`cloudasset.assets.searchAllIamPolicies`](https://cloud.google.com/asset-inventory/docs/access-control#required_permissions)
     *           permission on the desired scope.
     *           The allowed values are:
     *           * projects/{PROJECT_ID} (e.g., "projects/foo-bar")
     *           * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
     *           * folders/{FOLDER_NUMBER} (e.g., "folders/1234567")
     *           * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *     @type string $query
     *           Optional. The query statement. See [how to construct a
     *           query](https://cloud.google.com/asset-inventory/docs/searching-iam-policies#how_to_construct_a_query)
     *           for more information. If not specified or empty, it will search all the
     *           IAM policies within the specified `scope`. Note that the query string is
     *           compared against each Cloud IAM policy binding, including its members,
     *           roles, and Cloud IAM conditions. The returned Cloud IAM policies will only
     *           contain the bindings that match your query. To learn more about the IAM
     *           policy structure, see [IAM policy
     *           doc](https://cloud.google.com/iam/docs/policies#structure).
     *           Examples:
     *           * `policy:amy&#64;gmail.com` to find IAM policy bindings that specify user
     *             "amy&#64;gmail.com".
     *           * `policy:roles/compute.admin` to find IAM policy bindings that specify
     *             the Compute Admin role.
     *           * `policy:comp*` to find IAM policy bindings that contain "comp" as a
     *             prefix of any word in the binding.
     *           * `policy.role.permissions:storage.buckets.update` to find IAM policy
     *             bindings that specify a role containing "storage.buckets.update"
     *             permission. Note that if callers don't have `iam.roles.get` access to a
     *             role's included permissions, policy bindings that specify this role will
     *             be dropped from the search results.
     *           * `policy.role.permissions:upd*` to find IAM policy bindings that specify a
     *             role containing "upd" as a prefix of any word in the role permission.
     *             Note that if callers don't have `iam.roles.get` access to a role's
     *             included permissions, policy bindings that specify this role will be
     *             dropped from the search results.
     *           * `resource:organizations/123456` to find IAM policy bindings
     *             that are set on "organizations/123456".
     *           * `resource=//cloudresourcemanager.googleapis.com/projects/myproject` to
     *             find IAM policy bindings that are set on the project named "myproject".
     *           * `Important` to find IAM policy bindings that contain "Important" as a
     *             word in any of the searchable fields (except for the included
     *             permissions).
     *           * `resource:(instance1 OR instance2) policy:amy` to find
     *             IAM policy bindings that are set on resources "instance1" or
     *             "instance2" and also specify user "amy".
     *           * `roles:roles/compute.admin` to find IAM policy bindings that specify the
     *             Compute Admin role.
     *           * `memberTypes:user` to find IAM policy bindings that contain the "user"
     *             member type.
     *     @type int $page_size
     *           Optional. The page size for search result pagination. Page size is capped at 500 even
     *           if a larger value is given. If set to zero, server will pick an appropriate
     *           default. Returned results may be fewer than requested. When this happens,
     *           there could be more results as long as `next_page_token` is returned.
     *     @type string $page_token
     *           Optional. If present, retrieve the next batch of results from the preceding call to
     *           this method. `page_token` must be the value of `next_page_token` from the
     *           previous response. The values of all other method parameters must be
     *           identical to those in the previous call.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $asset_types
     *           Optional. A list of asset types that the IAM policies are attached to. If empty, it
     *           will search the IAM policies that are attached to all the [searchable asset
     *           types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#searchable_asset_types).
     *           Regular expressions are also supported. For example:
     *           * "compute.googleapis.com.*" snapshots IAM policies attached to asset type
     *           starts with "compute.googleapis.com".
     *           * ".*Instance" snapshots IAM policies attached to asset type ends with
     *           "Instance".
     *           * ".*Instance.*" snapshots IAM policies attached to asset type contains
     *           "Instance".
     *           See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     *           regular expression syntax. If the regular expression does not match any
     *           supported asset type, an INVALID_ARGUMENT error will be returned.
     *     @type string $order_by
     *           Optional. A comma-separated list of fields specifying the sorting order of the
     *           results. The default order is ascending. Add " DESC" after the field name
     *           to indicate descending order. Redundant space characters are ignored.
     *           Example: "assetType DESC, resource".
     *           Only singular primitive fields in the response are sortable:
     *             * resource
     *             * assetType
     *             * project
     *           All the other fields such as repeated fields (e.g., `folders`) and
     *           non-primitive fields (e.g., `policy`) are not supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A scope can be a project, a folder, or an organization. The search is
     * limited to the IAM policies within the `scope`. The caller must be granted
     * the
     * [`cloudasset.assets.searchAllIamPolicies`](https://cloud.google.com/asset-inventory/docs/access-control#required_permissions)
     * permission on the desired scope.
     * The allowed values are:
     * * projects/{PROJECT_ID} (e.g., "projects/foo-bar")
     * * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
     * * folders/{FOLDER_NUMBER} (e.g., "folders/1234567")
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. A scope can be a project, a folder, or an organization. The search is
     * limited to the IAM policies within the `scope`. The caller must be granted
     * the
     * [`cloudasset.assets.searchAllIamPolicies`](https://cloud.google.com/asset-inventory/docs/access-control#required_permissions)
     * permission on the desired scope.
     * The allowed values are:
     * * projects/{PROJECT_ID} (e.g., "projects/foo-bar")
     * * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
     * * folders/{FOLDER_NUMBER} (e.g., "folders/1234567")
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Optional. The query statement. See [how to construct a
     * query](https://cloud.google.com/asset-inventory/docs/searching-iam-policies#how_to_construct_a_query)
     * for more information. If not specified or empty, it will search all the
     * IAM policies within the specified `scope`. Note that the query string is
     * compared against each Cloud IAM policy binding, including its members,
     * roles, and Cloud IAM conditions. The returned Cloud IAM policies will only
     * contain the bindings that match your query. To learn more about the IAM
     * policy structure, see [IAM policy
     * doc](https://cloud.google.com/iam/docs/policies#structure).
     * Examples:
     * * `policy:amy&#64;gmail.com` to find IAM policy bindings that specify user
     *   "amy&#64;gmail.com".
     * * `policy:roles/compute.admin` to find IAM policy bindings that specify
     *   the Compute Admin role.
     * * `policy:comp*` to find IAM policy bindings that contain "comp" as a
     *   prefix of any word in the binding.
     * * `policy.role.permissions:storage.buckets.update` to find IAM policy
     *   bindings that specify a role containing "storage.buckets.update"
     *   permission. Note that if callers don't have `iam.roles.get` access to a
     *   role's included permissions, policy bindings that specify this role will
     *   be dropped from the search results.
     * * `policy.role.permissions:upd*` to find IAM policy bindings that specify a
     *   role containing "upd" as a prefix of any word in the role permission.
     *   Note that if callers don't have `iam.roles.get` access to a role's
     *   included permissions, policy bindings that specify this role will be
     *   dropped from the search results.
     * * `resource:organizations/123456` to find IAM policy bindings
     *   that are set on "organizations/123456".
     * * `resource=//cloudresourcemanager.googleapis.com/projects/myproject` to
     *   find IAM policy bindings that are set on the project named "myproject".
     * * `Important` to find IAM policy bindings that contain "Important" as a
     *   word in any of the searchable fields (except for the included
     *   permissions).
     * * `resource:(instance1 OR instance2) policy:amy` to find
     *   IAM policy bindings that are set on resources "instance1" or
     *   "instance2" and also specify user "amy".
     * * `roles:roles/compute.admin` to find IAM policy bindings that specify the
     *   Compute Admin role.
     * * `memberTypes:user` to find IAM policy bindings that contain the "user"
     *   member type.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Optional. The query statement. See [how to construct a
     * query](https://cloud.google.com/asset-inventory/docs/searching-iam-policies#how_to_construct_a_query)
     * for more information. If not specified or empty, it will search all the
     * IAM policies within the specified `scope`. Note that the query string is
     * compared against each Cloud IAM policy binding, including its members,
     * roles, and Cloud IAM conditions. The returned Cloud IAM policies will only
     * contain the bindings that match your query. To learn more about the IAM
     * policy structure, see [IAM policy
     * doc](https://cloud.google.com/iam/docs/policies#structure).
     * Examples:
     * * `policy:amy&#64;gmail.com` to find IAM policy bindings that specify user
     *   "amy&#64;gmail.com".
     * * `policy:roles/compute.admin` to find IAM policy bindings that specify
     *   the Compute Admin role.
     * * `policy:comp*` to find IAM policy bindings that contain "comp" as a
     *   prefix of any word in the binding.
     * * `policy.role.permissions:storage.buckets.update` to find IAM policy
     *   bindings that specify a role containing "storage.buckets.update"
     *   permission. Note that if callers don't have `iam.roles.get` access to a
     *   role's included permissions, policy bindings that specify this role will
     *   be dropped from the search results.
     * * `policy.role.permissions:upd*` to find IAM policy bindings that specify a
     *   role containing "upd" as a prefix of any word in the role permission.
     *   Note that if callers don't have `iam.roles.get` access to a role's
     *   included permissions, policy bindings that specify this role will be
     *   dropped from the search results.
     * * `resource:organizations/123456` to find IAM policy bindings
     *   that are set on "organizations/123456".
     * * `resource=//cloudresourcemanager.googleapis.com/projects/myproject` to
     *   find IAM policy bindings that are set on the project named "myproject".
     * * `Important` to find IAM policy bindings that contain "Important" as a
     *   word in any of the searchable fields (except for the included
     *   permissions).
     * * `resource:(instance1 OR instance2) policy:amy` to find
     *   IAM policy bindings that are set on resources "instance1" or
     *   "instance2" and also specify user "amy".
     * * `roles:roles/compute.admin` to find IAM policy bindings that specify the
     *   Compute Admin role.
     * * `memberTypes:user` to find IAM policy bindings that contain the "user"
     *   member type.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Optional. The page size for search result pagination. Page size is capped at 500 even
     * if a larger value is given. If set to zero, server will pick an appropriate
     * default. Returned results may be fewer than requested. When this happens,
     * there could be more results as long as `next_page_token` is returned.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The page size for search result pagination. Page size is capped at 500 even
     * if a larger value is given. If set to zero, server will pick an appropriate
     * default. Returned results may be fewer than requested. When this happens,
     * there could be more results as long as `next_page_token` is returned.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. If present, retrieve the next batch of results from the preceding call to
     * this method. `page_token` must be the value of `next_page_token` from the
     * previous response. The values of all other method parameters must be
     * identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If present, retrieve the next batch of results from the preceding call to
     * this method. `page_token` must be the value of `next_page_token` from the
     * previous response. The values of all other method parameters must be
     * identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. A list of asset types that the IAM policies are attached to. If empty, it
     * will search the IAM policies that are attached to all the [searchable asset
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#searchable_asset_types).
     * Regular expressions are also supported. For example:
     * * "compute.googleapis.com.*" snapshots IAM policies attached to asset type
     * starts with "compute.googleapis.com".
     * * ".*Instance" snapshots IAM policies attached to asset type ends with
     * "Instance".
     * * ".*Instance.*" snapshots IAM policies attached to asset type contains
     * "Instance".
     * See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     * regular expression syntax. If the regular expression does not match any
     * supported asset type, an INVALID_ARGUMENT error will be returned.
     *
     * Generated from protobuf field <code>repeated string asset_types = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetTypes()
    {
        return $this->asset_types;
    }

    /**
     * Optional. A list of asset types that the IAM policies are attached to. If empty, it
     * will search the IAM policies that are attached to all the [searchable asset
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#searchable_asset_types).
     * Regular expressions are also supported. For example:
     * * "compute.googleapis.com.*" snapshots IAM policies attached to asset type
     * starts with "compute.googleapis.com".
     * * ".*Instance" snapshots IAM policies attached to asset type ends with
     * "Instance".
     * * ".*Instance.*" snapshots IAM policies attached to asset type contains
     * "Instance".
     * See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     * regular expression syntax. If the regular expression does not match any
     * supported asset type, an INVALID_ARGUMENT error will be returned.
     *
     * Generated from protobuf field <code>repeated string asset_types = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->asset_types = $arr;

        return $this;
    }

    /**
     * Optional. A comma-separated list of fields specifying the sorting order of the
     * results. The default order is ascending. Add " DESC" after the field name
     * to indicate descending order. Redundant space characters are ignored.
     * Example: "assetType DESC, resource".
     * Only singular primitive fields in the response are sortable:
     *   * resource
     *   * assetType
     *   * project
     * All the other fields such as repeated fields (e.g., `folders`) and
     * non-primitive fields (e.g., `policy`) are not supported.
     *
     * Generated from protobuf field <code>string order_by = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. A comma-separated list of fields specifying the sorting order of the
     * results. The default order is ascending. Add " DESC" after the field name
     * to indicate descending order. Redundant space characters are ignored.
     * Example: "assetType DESC, resource".
     * Only singular primitive fields in the response are sortable:
     *   * resource
     *   * assetType
     *   * project
     * All the other fields such as repeated fields (e.g., `folders`) and
     * non-primitive fields (e.g., `policy`) are not supported.
     *
     * Generated from protobuf field <code>string order_by = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

