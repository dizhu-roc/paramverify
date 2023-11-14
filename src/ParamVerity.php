<?php
namespace DizhuRoc\Paramverify;

use DizhuRoc\Paramverify\Verify\Exception\VerifyException;
use DizhuRoc\Paramverify\Verify\VerifyFactory;

class ParamVerity
{
    public $setting = [];

    public function __construct(array $setting)
    {
        $this->setting = $setting;
    }

    /**
     * @param $data
     * @param $prefix
     * @return void
     * @throws VerifyException
     */
    public function verfiy(array $data, $method = '')
    {
        if ($this->setting)
        {
            try {
                foreach ($this->setting as $type => $fields)
                {
                    $verifyObj = VerifyFactory::create($type);
                    $verifyObj->verify($data, $fields);
                }
            } catch (VerifyException $e) {
                throw new VerifyException($e->getMessage(), $e->getCode());
            }
        }
    }
}