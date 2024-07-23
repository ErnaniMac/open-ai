<?php

namespace ErnaniMac\openai\src\Enum;

enum HttpStatusCode: int 
{
    case OK = 200;

    case CREATED = 201;

    case ACCEPTED = 202;

    case NO_CONTENT = 204;

    case MULTI_STATUS = 207;

    case BAD_REQUEST = 400;

    case UNAUTHORIZED = 401;

    case NOT_FOUND = 404;

    case METHOD_NOT_ALLOWED = 405;

    case UNPROCESSABLE_ENTITY = 422;

    case INTERNAL_SERVER_ERROR = 500;

    case TOO_MANY_REQUESTS = 429;
    
    case CONFLICT = 409;
}