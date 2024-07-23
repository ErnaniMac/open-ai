<?php

namespace ErnaniMac\openai\src\Formatter;

use ErnaniMac\openai\src\Formatter;
use src\Entities;

class Factory 
{
    public function createTerminal(array $data): Formatter\Terminal
    {
        return new Formatter\Terminal($data['content']);
    }
}
