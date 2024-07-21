<?php

namespace ErnaniMac\openia\src\Resource;

use ErnaniMac\openia\src\Enum\HttpStatusCode;
use Exception;
use ErnaniMac\openia\src\Profile;

abstract class Base
{
    protected Profile $profile;
    protected array $request;

    public function __construct(array $request, Profile $profile)
    {
        $this->request = $request;
        $this->profile = $profile;
    }

    public function getRequest()
    {
        return $this->request;
    }

    protected function checkHttpStatusCode($response)
    {
        $successStatus = [
            HttpStatusCode::OK,
            HttpStatusCode::CREATED,
            HttpStatusCode::ACCEPTED
        ];

        if (in_array($response['httpStatusCode'], $successStatus)) {
            return;
        }

        return throw new Exception(
            $response['errorMessage'],
            $response['httpStatusCode']
        );
    }

    protected function getResponse()
    {
        $url = $this->profile->getUrl();
        $token = $this->profile->getToken();
        $segments = $this->getRequest()['segments'];
        $queryString = $this->getRequest()['queryString'] ?? "";
        $method = $this->getRequest()['method'];
        $bodyJson = $this->getRequest()['bodyJson'] ?? "";

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "{$url}{$segments}{$queryString}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => $bodyJson,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer {$token}",
                "Accept: */*",
                "Content-Type: application/json"
            ],
        ]);

        $content = curl_exec($curl) ?? "";
        $httpStatusCode = curl_getinfo($curl) ?? "";
        $errorMessage = curl_error($curl) ?? "";

        $content = json_decode($content, true);

        $response = [
            'content' => $content,
            'httpStatusCode' => $httpStatusCode['http_code'],
            'errorMessage' => $errorMessage
        ];

        curl_close($curl);

        try {
            $this->checkHttpStatusCode($response);
        } catch (Exception $exception) {
            throw $exception;
        }

        return $response;
    }
}
