<?php
namespace DizhuRoc\Paramverify\Verify\Rules;

abstract class VerifyBase
{
    abstract static function verify($data, $fields);
}