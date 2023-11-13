<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainQPSListResponseBody;

use AlibabaCloud\Tea\Model;

class domainQPSList extends Model
{
    /**
     * @description The attack QPS.
     *
     * @example 1
     *
     * @var int
     */
    public $attackQps;

    /**
     * @description The number of cache hits.
     *
     * @example 0
     *
     * @var int
     */
    public $cacheHits;

    /**
     * @description The index number of the returned data.
     *
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @description The peak attack QPS.
     *
     * @example 37
     *
     * @var int
     */
    public $maxAttackQps;

    /**
     * @description The peak of normal QPS.
     *
     * @example 93
     *
     * @var int
     */
    public $maxNormalQps;

    /**
     * @description The peak of total QPS.
     *
     * @example 130
     *
     * @var int
     */
    public $maxQps;

    /**
     * @description The time when the data was collected. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1582992000
     *
     * @var int
     */
    public $time;

    /**
     * @description The total number of requests.
     *
     * @example 20008
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The total QPS.
     *
     * @example 1
     *
     * @var int
     */
    public $totalQps;
    protected $_name = [
        'attackQps'    => 'AttackQps',
        'cacheHits'    => 'CacheHits',
        'index'        => 'Index',
        'maxAttackQps' => 'MaxAttackQps',
        'maxNormalQps' => 'MaxNormalQps',
        'maxQps'       => 'MaxQps',
        'time'         => 'Time',
        'totalCount'   => 'TotalCount',
        'totalQps'     => 'TotalQps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackQps) {
            $res['AttackQps'] = $this->attackQps;
        }
        if (null !== $this->cacheHits) {
            $res['CacheHits'] = $this->cacheHits;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->maxAttackQps) {
            $res['MaxAttackQps'] = $this->maxAttackQps;
        }
        if (null !== $this->maxNormalQps) {
            $res['MaxNormalQps'] = $this->maxNormalQps;
        }
        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalQps) {
            $res['TotalQps'] = $this->totalQps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainQPSList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackQps'])) {
            $model->attackQps = $map['AttackQps'];
        }
        if (isset($map['CacheHits'])) {
            $model->cacheHits = $map['CacheHits'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['MaxAttackQps'])) {
            $model->maxAttackQps = $map['MaxAttackQps'];
        }
        if (isset($map['MaxNormalQps'])) {
            $model->maxNormalQps = $map['MaxNormalQps'];
        }
        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalQps'])) {
            $model->totalQps = $map['TotalQps'];
        }

        return $model;
    }
}
