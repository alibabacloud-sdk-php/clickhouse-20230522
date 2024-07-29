<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\RestartDBInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cc-bp100p4q1g9z3****
     *
     * @var int
     */
    public $DBInstanceID;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example 100001080
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'DBInstanceID'   => 'DBInstanceID',
        'DBInstanceName' => 'DBInstanceName',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
