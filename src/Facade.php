<?php

namespace ErnaniMac\openia\src;

use ErnaniMac\openia\src\Outsource;
use ErnaniMac\openia\src\Profile;

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
