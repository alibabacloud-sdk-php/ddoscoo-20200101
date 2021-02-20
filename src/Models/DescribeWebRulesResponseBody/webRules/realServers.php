<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules;

use AlibabaCloud\Tea\Model;

class realServers extends Model
{
    /**
     * @var int
     */
    public $rsType;

    /**
     * @var string
     */
    public $realServer;
    protected $_name = [
        'rsType'     => 'RsType',
        'realServer' => 'RealServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }
        if (null !== $this->realServer) {
            $res['RealServer'] = $this->realServer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }
        if (isset($map['RealServer'])) {
            $model->realServer = $map['RealServer'];
        }

        return $model;
    }
}
