<?php

namespace ErnaniMac\openai\src;

use ErnaniMac\openai\src\Outsource;
use ErnaniMac\openai\src\Profile;

class Facade 
{
    private Outsource\Terminal $terminalOutsource;

    public function __construct(string $token, string $url) {
        $this->terminalOutsource = new Outsource\Terminal(
            new Profile($token, $url)
        );
    }

    public function prompt(array $data) 
    {
        return $this->terminalOutsource->createTerminal($data);
    }
}
