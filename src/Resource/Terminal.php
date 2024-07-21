<?php

namespace ErnaniMac\openia\src\Resource;

use ErnaniMac\openia\src\Enum\HttpMethod;
use ErnaniMac\openia\src\Profile;
use ErnaniMac\openia\src\Contract\ParserInterface;

class Terminal extends Base
{
    public function __construct(array $request, Profile $profile)
    {
        parent::__construct($request, $profile);

        $this->request['segments'] = 'v1/chat/completions';
    }

    public function chat(ParserInterface $parser)
    {
        $this->request['bodyJson'] = $parser->getParsedItem();
        $this->request['method'] = HttpMethod::POST;

        return $this->getResponse();
    }
}
