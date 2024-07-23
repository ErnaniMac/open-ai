<?php

namespace ErnaniMac\openai\src\Outsource;

use ErnaniMac\openai\src\Formatter;
use ErnaniMac\openai\src\Parser;
use ErnaniMac\openai\src\Resource;
use ErnaniMac\openai\src\Profile;

abstract class AbstractOutsource
{
    private Formatter\Factory $formatterFactory;
    private Parser\Factory $parserFactory;
    private Resource\Factory $resourceFactory;

    public function __construct(Profile $profile) {
        $this->formatterFactory = new Formatter\Factory();
        $this->parserFactory = new Parser\Factory();
        $this->resourceFactory = new Resource\Factory($profile);
    }

    public function getResourceFactory(): Resource\Factory
    {
        return $this->resourceFactory;
    }

    public function setResourceFactory(Resource\Factory $resourceFactory)
    {
        $this->resourceFactory = $resourceFactory;

        return $this;
    }

    public function getFormatterFactory(): Formatter\Factory
    {
        return $this->formatterFactory;
    }

    public function setFormatterFactory(Formatter\Factory $formatterFactory)
    {
        $this->formatterFactory = $formatterFactory;

        return $this;
    }

    public function getParserFactory(): Parser\Factory
    {
        return $this->parserFactory;
    }

    public function setParserFactory(Parser\Factory $parserFactory)
    {
        $this->parserFactory = $parserFactory;

        return $this;
    }
}
