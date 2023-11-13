<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessLogDispatchStatusResponseBody\slsConfigStatus;
use AlibabaCloud\Tea\Model;

class DescribeWebAccessLogDispatchStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the log analysis feature is enabled for domain names.
     *
     * @var slsConfigStatus[]
     */
    public $slsConfigStatus;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'       => 'RequestId',
        'slsConfigStatus' => 'SlsConfigStatus',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsConfigStatus) {
            $res['SlsConfigStatus'] = [];
            if (null !== $this->slsConfigStatus && \is_array($this->slsConfigStatus)) {
                $n = 0;
                foreach ($this->slsConfigStatus as $item) {
                    $res['SlsConfigStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebAccessLogDispatchStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsConfigStatus'])) {
            if (!empty($map['SlsConfigStatus'])) {
                $model->slsConfigStatus = [];
                $n                      = 0;
                foreach ($map['SlsConfigStatus'] as $item) {
                    $model->slsConfigStatus[$n++] = null !== $item ? slsConfigStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
