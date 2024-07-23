<?php

namespace ErnaniMac\openai\src\Formatter;

use ErnaniMac\openai\src\Contract\FormatterInterface;

class Terminal implements FormatterInterface
{
    private array $contentResponse;

    public function __construct(array $contentResponse) {
        $this->contentResponse = $contentResponse;
    }

    /**
     * @inheritDoc
     */
    public function formatItem()
    {
        return $this->contentResponse['choices'][0]['message']['content'];
    }
}
