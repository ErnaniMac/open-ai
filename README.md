# OpenIA chat

![Slim PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

Component for using the OpenIA API and its models.


## Requisitos

- PHP >=7.4

## Instalação

1. Add in your composer:

```bash
composer require ernani-mac/open-ia
```

## Como usar

```php
    
    use ErnaniMac\openia\src\Facade;

    class Terminal
    {
        public function chat($token, $url) 
        {
            $chat = new Facade($token, $url);

            // OpenIA LLM model to use.
            $model = 'gpt-3.5-turbo';

            // Pre-configured how you want the AI ​​to interact with your questions.
            $system_content = 'A linguagem das perguntas é PHP. Sempre dê pelo menos um exemplo.';

            // Your question/message to AI.
            $user_content = 'Mostre me como criar um middleware sem usar bibliotecas.';

            // Maximum tokens per request counting with your question and the AI's answer.
            $max_tokens = 500;

            $data = [
                'model' => $model,
                'system_content' => $system_content,
                'user_content' => $user_content,
                'max_tokens' => $max_tokens
            ];

            return $chat->prompt($data);
        }
    }



    $terminal = new Terminal();

    try {

        $apiKey = 'YOUR_API_KEY';
        $base_url_openIA = 'https://api.openai.com/';

        $response = $terminal->chat($apiKey, $base_url_openIA);

        var_dump($response);

    } catch (Exception $e) {
        var_dump($e);
    }

```