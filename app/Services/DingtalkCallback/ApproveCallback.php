<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/12/012
 * Time: 10:47
 */

namespace App\Services\DingtalkCallback;


class ApproveCallback
{
    use BatchApprove;

    protected $financeOfficerSn = 110105;
    protected $financeOfficerName = '张博涵';

    /**
     * 批量审批回调
     * @param $request
     */
    public function batchApproveCallback($request){
        return $this->batch($request);
    }
}