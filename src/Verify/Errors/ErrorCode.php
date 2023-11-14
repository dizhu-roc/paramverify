<?php
namespace DizhuRoc\Paramverify\Verify\Errors;

class ErrorCode
{
    const PARAM_NOT_NUMBER                          = 1100;
    const PARAM_NOT_IN_ARRAY                        = 1101;
    const PARAM_TOO_SHORT                           = 1102;
    const PARAM_TOO_LONG                            = 1103;
    const PARAM_NOT_DATE_TIME                       = 1104;
    const PARAM_NOT_JSON_VALUE                      = 1105;
    const PARAM_NOT_MOBILE                          = 1106;
    const MISS_REQUEST_PARAMS                       = 1107;
    const PARAM_IS_EMPTY                            = 1109;
    const PARAM_NOT_PRICE                           = 1110;
    const PARAM_NOT_DIGITS_NUMBER                   = 1111;
    const VERIFY_PARAMS_EXCEPTION                   = 1112;
    const INVALID_PARAM                             = 1113;
    const SEND_TO_QUEUE_FAILED                      = 1114;
    const REDIS_NUMBER_ERROR                        = 1115;
    const PARAM_NOT_EMAIL                           = 1116;
    const ENTITY_MODEL_IS_EMPTY                     = 1117;
    const PARAM_NOT_GREATER_THAN_ZERO               = 1118;
    const PARAM_NOT_ARRAY_VALUE                     = 1119;

    const VERIFY_CLASS_NOT_EXISTS                   = 1120;
}