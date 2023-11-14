<?php
namespace Paramverify\Verify\Rules;

use Paramverify\Verify\Errors\ErrorCode;
use Paramverify\Verify\Exception\VerifyException;

class NotNullVerify extends VerifyBase
{

    /**
     * @param $data
     * @param $fields
     * @return void
     */
    static function verify($data, $fields)
    {
        foreach ($fields as $k => $v)
        {
            $key = $k;
            if (is_numeric($k)) {
                $key = $v;
            }
            $msg = !is_numeric($k) ? $v :"参数[".$key."]的值不能为空";

            if (!isset($data[$key])) {
                throw new VerifyException($msg, ErrorCode::PARAM_IS_EMPTY);
            }

            if (is_array($data[$key])) {
                if (count($data[$key]) < 1) {
                    throw new VerifyException($msg, ErrorCode::PARAM_IS_EMPTY);
                }
            } else if (trim($data[$key]) == '') { // check values ['',null,'  ']
                throw new VerifyException($msg, ErrorCode::PARAM_IS_EMPTY);
            } else {}
        }
    }
}