<?php

namespace ErnaniMac\openai\src\Outsource;

class Terminal extends AbstractOutsource
{
    public function createTerminal(array $data) 
    {
        $returnResponse = $this->getResourceFactory()
            ->createTerminal()
            ->chat(
                $this->getParserFactory()
                    ->createTerminal()
                    ->parseCreate($data)
            );
        
        return $this->getFormatterFactory()->createTerminal($returnResponse)
            ->formatItem();
    }
}
