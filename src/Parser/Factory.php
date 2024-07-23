<?php

namespace ErnaniMac\openai\src\Parser;

use ErnaniMac\openai\src\Parser;

class Factory
{

    public function createTerminal(): Parser\Terminal
    {
        return new Parser\Terminal();
    }
}
