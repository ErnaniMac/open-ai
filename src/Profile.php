<?php

namespace ErnaniMac\openai\src;

class Profile
{
    private string $token;
    private string $url;

    public function __construct(string $token, string $url)
    {
        $this->token = $token;
        $this->url = $url;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
