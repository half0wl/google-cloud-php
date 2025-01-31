<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/job_service.proto

namespace Google\Cloud\Talent\V4\SearchJobsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Custom ranking information for [SearchJobsRequest][google.cloud.talent.v4.SearchJobsRequest].
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo</code>
 */
class CustomRankingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Controls over how important the score of
     * [CustomRankingInfo.ranking_expression][google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo.ranking_expression] gets applied to job's final
     * ranking position.
     * An error is thrown if not specified.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo.ImportanceLevel importance_level = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $importance_level = 0;
    /**
     * Required. Controls over how job documents get ranked on top of existing relevance
     * score (determined by API algorithm). A combination of the ranking
     * expression and relevance score is used to determine job's final ranking
     * position.
     * The syntax for this expression is a subset of Google SQL syntax.
     * Supported operators are: +, -, *, /, where the left and right side of
     * the operator is either a numeric [Job.custom_attributes][google.cloud.talent.v4.Job.custom_attributes] key,
     * integer/double value or an expression that can be evaluated to a number.
     * Parenthesis are supported to adjust calculation precedence. The
     * expression must be < 200 characters in length.
     * The expression is considered invalid for a job if the expression
     * references custom attributes that are not populated on the job or if the
     * expression results in a divide by zero. If an expression is invalid for a
     * job, that job is demoted to the end of the results.
     * Sample ranking expression
     * (year + 25) * 0.25 - (freshness / 0.5)
     *
     * Generated from protobuf field <code>string ranking_expression = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ranking_expression = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $importance_level
     *           Required. Controls over how important the score of
     *           [CustomRankingInfo.ranking_expression][google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo.ranking_expression] gets applied to job's final
     *           ranking position.
     *           An error is thrown if not specified.
     *     @type string $ranking_expression
     *           Required. Controls over how job documents get ranked on top of existing relevance
     *           score (determined by API algorithm). A combination of the ranking
     *           expression and relevance score is used to determine job's final ranking
     *           position.
     *           The syntax for this expression is a subset of Google SQL syntax.
     *           Supported operators are: +, -, *, /, where the left and right side of
     *           the operator is either a numeric [Job.custom_attributes][google.cloud.talent.v4.Job.custom_attributes] key,
     *           integer/double value or an expression that can be evaluated to a number.
     *           Parenthesis are supported to adjust calculation precedence. The
     *           expression must be < 200 characters in length.
     *           The expression is considered invalid for a job if the expression
     *           references custom attributes that are not populated on the job or if the
     *           expression results in a divide by zero. If an expression is invalid for a
     *           job, that job is demoted to the end of the results.
     *           Sample ranking expression
     *           (year + 25) * 0.25 - (freshness / 0.5)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Controls over how important the score of
     * [CustomRankingInfo.ranking_expression][google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo.ranking_expression] gets applied to job's final
     * ranking position.
     * An error is thrown if not specified.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo.ImportanceLevel importance_level = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getImportanceLevel()
    {
        return $this->importance_level;
    }

    /**
     * Required. Controls over how important the score of
     * [CustomRankingInfo.ranking_expression][google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo.ranking_expression] gets applied to job's final
     * ranking position.
     * An error is thrown if not specified.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo.ImportanceLevel importance_level = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setImportanceLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4\SearchJobsRequest\CustomRankingInfo\ImportanceLevel::class);
        $this->importance_level = $var;

        return $this;
    }

    /**
     * Required. Controls over how job documents get ranked on top of existing relevance
     * score (determined by API algorithm). A combination of the ranking
     * expression and relevance score is used to determine job's final ranking
     * position.
     * The syntax for this expression is a subset of Google SQL syntax.
     * Supported operators are: +, -, *, /, where the left and right side of
     * the operator is either a numeric [Job.custom_attributes][google.cloud.talent.v4.Job.custom_attributes] key,
     * integer/double value or an expression that can be evaluated to a number.
     * Parenthesis are supported to adjust calculation precedence. The
     * expression must be < 200 characters in length.
     * The expression is considered invalid for a job if the expression
     * references custom attributes that are not populated on the job or if the
     * expression results in a divide by zero. If an expression is invalid for a
     * job, that job is demoted to the end of the results.
     * Sample ranking expression
     * (year + 25) * 0.25 - (freshness / 0.5)
     *
     * Generated from protobuf field <code>string ranking_expression = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRankingExpression()
    {
        return $this->ranking_expression;
    }

    /**
     * Required. Controls over how job documents get ranked on top of existing relevance
     * score (determined by API algorithm). A combination of the ranking
     * expression and relevance score is used to determine job's final ranking
     * position.
     * The syntax for this expression is a subset of Google SQL syntax.
     * Supported operators are: +, -, *, /, where the left and right side of
     * the operator is either a numeric [Job.custom_attributes][google.cloud.talent.v4.Job.custom_attributes] key,
     * integer/double value or an expression that can be evaluated to a number.
     * Parenthesis are supported to adjust calculation precedence. The
     * expression must be < 200 characters in length.
     * The expression is considered invalid for a job if the expression
     * references custom attributes that are not populated on the job or if the
     * expression results in a divide by zero. If an expression is invalid for a
     * job, that job is demoted to the end of the results.
     * Sample ranking expression
     * (year + 25) * 0.25 - (freshness / 0.5)
     *
     * Generated from protobuf field <code>string ranking_expression = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRankingExpression($var)
    {
        GPBUtil::checkString($var, True);
        $this->ranking_expression = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomRankingInfo::class, \Google\Cloud\Talent\V4\SearchJobsRequest_CustomRankingInfo::class);

