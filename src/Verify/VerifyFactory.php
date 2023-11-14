<?php
namespace Paramverify\Verify;

use Paramverify\Verify\Errors\ErrorCode;
use Paramverify\Verify\Exception\VerifyException;

class VerifyFactory
{
    /**
     * 创建校验类
     *
     * @param string $type
     * @return mixed
     * @throws VerifyException
     */
    public static function create(string $type)
    {
        $name = str_replace('_', '', ucwords($type, '_'));

        $class  = '\Paramverify\Verify\Rules\\'.$name.'Verify';
        if (!class_exists($class)) {
            throw new VerifyException('验证类不存在', ErrorCode::VERIFY_CLASS_NOT_EXISTS);
        }

        return new $class();
    }
}