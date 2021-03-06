<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortConnsListResponseBody;

use AlibabaCloud\Tea\Model;

class connsList extends Model
{
    /**
     * @var int
     */
    public $actConns;

    /**
     * @var int
     */
    public $inActConns;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $cps;

    /**
     * @var int
     */
    public $conns;
    protected $_name = [
        'actConns'   => 'ActConns',
        'inActConns' => 'InActConns',
        'index'      => 'Index',
        'time'       => 'Time',
        'cps'        => 'Cps',
        'conns'      => 'Conns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actConns) {
            $res['ActConns'] = $this->actConns;
        }
        if (null !== $this->inActConns) {
            $res['InActConns'] = $this->inActConns;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->conns) {
            $res['Conns'] = $this->conns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActConns'])) {
            $model->actConns = $map['ActConns'];
        }
        if (isset($map['InActConns'])) {
            $model->inActConns = $map['InActConns'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['Conns'])) {
            $model->conns = $map['Conns'];
        }

        return $model;
    }
}
