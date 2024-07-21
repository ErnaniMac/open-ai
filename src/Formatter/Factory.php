<?php

namespace ErnaniMac\openia\src\Formatter;

use ErnaniMac\openia\src\Formatter;
use src\Entities;

class Factory 
{
    public function createTerminal(array $data): Formatter\Terminal
    {
        return new Formatter\Terminal($data['content']);
    }
}
