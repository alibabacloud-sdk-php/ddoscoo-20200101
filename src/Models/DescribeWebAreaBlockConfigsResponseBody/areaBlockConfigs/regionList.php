<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsResponseBody\areaBlockConfigs;

use AlibabaCloud\Tea\Model;

class regionList extends Model
{
    /**
     * @description Indicates whether the location is blocked. Valid values:
     *
     *   **0**: yes
     *   **1**: no
     *
     * @example 0
     *
     * @var int
     */
    public $block;

    /**
     * @description The name of the location.
     *
     * @example CN-SHANGHAI
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'block'  => 'Block',
        'region' => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->block) {
            $res['Block'] = $this->block;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Block'])) {
            $model->block = $map['Block'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
