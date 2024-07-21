<?php

namespace ErnaniMac\openia\src\Parser;

use ErnaniMac\openia\src\Parser;

class Factory
{

    public function createTerminal(): Parser\Terminal
    {
        return new Parser\Terminal();
    }
}
