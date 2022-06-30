<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlackholeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class blackholeStatus extends Model
{
    /**
     * @var string
     */
    public $blackStatus;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'blackStatus' => 'BlackStatus',
        'endTime'     => 'EndTime',
        'ip'          => 'Ip',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackStatus) {
            $res['BlackStatus'] = $this->blackStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blackholeStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackStatus'])) {
            $model->blackStatus = $map['BlackStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
