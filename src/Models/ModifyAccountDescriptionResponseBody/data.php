<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountDescriptionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example testuser
     *
     * @var string
     */
    public $account;

    /**
     * @description The cluster ID.
     *
     * @example cc-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'account'      => 'Account',
        'DBInstanceId' => 'DBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
