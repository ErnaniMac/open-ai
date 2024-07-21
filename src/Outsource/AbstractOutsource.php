<?php

namespace ErnaniMac\openia\src\Outsource;

use ErnaniMac\openia\src\Formatter;
use ErnaniMac\openia\src\Parser;
use ErnaniMac\openia\src\Resource;
use ErnaniMac\openia\src\Profile;

abstract class AbstractOutsource
{
    private Formatter\Factory $formatterFactory;
    private Parser\Factory $parserFactory;
    private Resource\Factory $resourceFactory;

    public function __construct() {
        $this->formatterFactory = new Formatter\Factory();
        $this->parserFactory = new Parser\Factory();
        $this->resourceFactory = new Resource\Factory(new Profile);
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
