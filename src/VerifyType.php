<?php
namespace Paramverify;

class VerifyType
{
    /**
     * 参数不能缺少的情况
     */
    const NECESSARY = 'necessary';

    /**
     * 参数必须为数字的情况
     */
    const NUMERIC = 'numeric';

    /**
     * 字符串长度限制
     */
    const LENGTH_LIMIT = 'length_limit';

    /**
     * 参数是否在指定的数组集中
     */
    const IN_ARRAY = 'in_array';

    /**
     * 判断参数是否为json
     */
    const IS_JSON = 'is_json';

    /**
     * 验证参数是否为空 ['',null,' ']
     */
    const NOT_NULL = 'not_null';

    /**
     * 判断字段中的内容项数量是否在指定范围内
     */
    const INCLUDE_NUM_LIMIT = 'include_num_limit';

    /**
     * 验证是否是正整数
     */
    const DIGITS = 'digits';

    /**
     * 价格验证
     */
    const PRICE = 'price';

    /**
     * 验证是否是一个日期
     */
    const IS_DATE = 'is_date';

    /**
     * 验证是否是手机号
     */
    const IS_MOBILE = 'is_mobile';

    /**
     * 验证是否是邮箱
     */
    const IS_EMAIL = 'is_email';

    /**
     * 验证是否大于0
     */
    const IS_GREATER_ZERO = 'is_greater_zero';

    /**
     * 验证是否是数组
     */
    const IS_ARRAY = 'is_array';
}