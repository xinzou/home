<?php
/**
 * Created by PhpStorm.
 * User: shenzhao
 * Date: 2016/12/13
 * Time: 上午9:50
 */

/**
 * 创建异步返回数据
 * @param string $data 返回的数据
 * @param string $reason 描述信息
 * @param string $ret 状态码
 * @param string $extend 额外参数
 * @return string
 */
function build_result($data, $reason = '', $ret = '', $extend = '')
{
    if (is_array($data)) {
        $ret_info['ret'] = $ret ?: 200;
        $ret_info['reason'] = !empty($reason) ? $reason : '成功';
        $ret_info['data'] = $data;
    } else {
        $ret_info['ret'] = $ret ?: 500;
        $ret_info['reason'] = !empty($reason) ? $reason : '失败';
        $ret_info['data'] = $extend;
    }

    return json_encode($ret_info);
}