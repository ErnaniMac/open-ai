<?php

namespace ErnaniMac\openia\src\Enum;

final class HttpStatusCode 
{
    const OK = 200;

    const CREATED = 201;

    const ACCEPTED = 202;

    const NO_CONTENT = 204;

    const BAD_REQUEST = 400;

    const UNAUTHORIZED = 401;

    const NOT_FOUND = 404;

    const METHOD_NOT_ALLOWED = 405;

    const UNPROCESSABLE_ENTITY = 422;

    const INTERNAL_SERVER_ERROR = 500;

    const TOO_MANY_REQUESTS = 429;

    const CONFLICT = 409;
}
