<?php

namespace ErnaniMac\openai\src\Parser;

use ErnaniMac\openai\src\Contract\ParserInterface;

class Terminal implements ParserInterface
{
    private string $parsedItem;

    public function parseCreate(array $rawData): ParserInterface
    {
        $data = [
            'model' => $rawData['model'],
            'messages' => [
                [
                    "role" => "system",
                    "content" => $rawData['system_content']
                ],
                [
                    "role" => "user",
                    "content" => $rawData['user_content']
                ]
            ],
            'max_tokens' => $rawData['max_tokens']
        ];

        $this->parsedItem = json_encode($data);

        return $this;
    }

    public function getParsedItem(): string
    {
        return $this->parsedItem;
    }
}
