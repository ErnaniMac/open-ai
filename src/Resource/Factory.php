<?php

namespace ErnaniMac\openia\src\Resource;

use ErnaniMac\openia\src\Resource;
use ErnaniMac\openia\src\Profile;

class Factory
{
    private Profile $profile;

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    private function getRequest()
    {
        return [
            'Accept', 'application/json',
            'Content-Type' => 'application/json'
        ];
    }

    public function createTerminal(): Resource\Terminal
    {
        return new Resource\Terminal($this->getRequest(), $this->profile);
    }
}
