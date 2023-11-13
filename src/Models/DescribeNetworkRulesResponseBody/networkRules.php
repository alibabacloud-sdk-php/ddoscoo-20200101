<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRulesResponseBody;

use AlibabaCloud\Tea\Model;

class networkRules extends Model
{
    /**
     * @description The port of the origin server.
     *
     * @example 80
     *
     * @var int
     */
    public $backendPort;

    /**
     * @description The forwarding port.
     *
     * @example 80
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description The ID of the instance.
     *
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the port forwarding rule is automatically created. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $isAutoCreate;

    /**
     * @description The forwarding protocol. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description An array that consists of IP addresses of origin servers.
     *
     * @var string[]
     */
    public $realServers;
    protected $_name = [
        'backendPort'  => 'BackendPort',
        'frontendPort' => 'FrontendPort',
        'instanceId'   => 'InstanceId',
        'isAutoCreate' => 'IsAutoCreate',
        'protocol'     => 'Protocol',
        'realServers'  => 'RealServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendPort) {
            $res['BackendPort'] = $this->backendPort;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isAutoCreate) {
            $res['IsAutoCreate'] = $this->isAutoCreate;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsAutoCreate'])) {
            $model->isAutoCreate = $map['IsAutoCreate'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }

        return $model;
    }
}
