<?php

namespace ErnaniMac\openai\src\Resource;

use ErnaniMac\openai\src\Enum\HttpMethod;
use ErnaniMac\openai\src\Profile;
use ErnaniMac\openai\src\Contract\ParserInterface;

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
        $this->request['method'] = HttpMethod::POST->value;

        return $this->getResponse();
    }
}
