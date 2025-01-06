<?php

// src/Service/TwilioService.php

namespace App\Service;

use Twilio\Rest\Client;

class TwilioService
{
    private $accountSid;
    private $authToken;
    private $twilioPhoneNumber;

    public function __construct()
    {
        $this->accountSid = "AC3afa4061d2e4956156e8b281f2c08e3a";
        $this->authToken = "681b803f14e63f3c8f6ba569f098f412";
        $this->twilioPhoneNumber = +"+17605383076";
    }

    public function sendVerificationCode(string $phoneNumber, string $verificationCode): void
    {
        $client = new Client($this->accountSid, $this->authToken);

        $client->messages->create(
            $phoneNumber,
            [
                'from' => $this->twilioPhoneNumber,
                'body' => 'Your verification code is: ' . $verificationCode,
            ]
        );
    }
}
