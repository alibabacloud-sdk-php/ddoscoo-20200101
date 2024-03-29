<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosAllEventListResponseBody\attackEvents;
use AlibabaCloud\Tea\Model;

class DescribeDDosAllEventListResponseBody extends Model
{
    /**
     * @description An array that consists of attack events.
     *
     * @var attackEvents[]
     */
    public $attackEvents;

    /**
     * @description The ID of the request.
     *
     * @example 25D83ED5-28CB-5683-9CF7-AECE521F3005
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of DDoS attack events.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'attackEvents' => 'AttackEvents',
        'requestId'    => 'RequestId',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackEvents) {
            $res['AttackEvents'] = [];
            if (null !== $this->attackEvents && \is_array($this->attackEvents)) {
                $n = 0;
                foreach ($this->attackEvents as $item) {
                    $res['AttackEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDosAllEventListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackEvents'])) {
            if (!empty($map['AttackEvents'])) {
                $model->attackEvents = [];
                $n                   = 0;
                foreach ($map['AttackEvents'] as $item) {
                    $model->attackEvents[$n++] = null !== $item ? attackEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
