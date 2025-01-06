<?php

namespace App\Service;

use Google_Client;
use Google_Service_Calendar;



class GoogleCalendarService
{
    private $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setApplicationName('Your Application Name');
        $this->client->setScopes(Google_Service_Calendar::CALENDAR);
        $this->client->setAuthConfig([
            'type' => 'service_account',
            'project_id' => 'testy-406703',
            'private_key_id' => '89ca5552f69bd78b4943b0786e464b99cda9c14b',
            'private_key' => "-----BEGIN PRIVATE KEY-----\nMIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDqqwhaq95k/CEi\nSqe2CfZG7vzYggoh/kiMqewoc7cMzcMqzbrMJnabMjrvR3iH48lee2oyowRc6dmA\n2eJk5fGGSSeHn4JGqPWoKwR8JyfxQPzL156fQpYKq79H4CQlxKJ2mUTFg0o/xE+/\nRDHxE0z5ADx5jJ7/6XZtP3asZdOn1EDeafyMh0npbQsNWYamQoZ1eR1HmNrCSxI7\nLs3Cg4ZJmkPRVelZMWQ2Ozfhre+wKqIAWg54IItr6ldybavsCuotJVeNuqgW/2h9\nbX9py6ckyIv25QbZExpNF4ytdU1O+O/2gSe4pD27S/jemKmZ2r+TOVTGdTx5ZDSD\nLi8qYAldAgMBAAECggEAEOKAheGi7Vo02h5MBe2ekkkE2WE18G828iQR0XFOBPZT\nKiPGYoUL+Ku7ENdwJTrvFMTFheIz4KmU1FAZGZBv+e0OkpQYEBR9JH3/4x0AIzw9\nVD9t8uCcIiVsbHQEtdD5rZXmnF2PfJoX8NerzkBIxAvPziEfmaNHOaIc3FexTHx2\na6wDPRj5UjFlXGo/pEtK0UwGAKHoakW1SXpPhmDz8jPqdnyxNyaVdQhA67Ul5VTM\nQM5IM5MuP26g8/QU60Csv1cSB6pztrajccMvFyhSrrBBd1FcSoGHABpcucglbVy8\n3SYkkAXt07Wlqd3jby9D4eWZ0eUCllronFKEq2V0QQKBgQD7vLL0Lvt8IK8YeSCg\nal4D/OUdLdvM4n3GMk/sWBM+z91O+t21BOom7N7iIksBOezUzPy9UFhp8Tlk5qeQ\nGl2eL1VydPK7XQqBcIMk/kdL6E8gXzPGyFv8JTzstWd1REvnoK4dBczMnsurXzCc\ny9T1iFh1H/flAY1lgh6ZhzkKvQKBgQDupFaJ65T0ujwqq3qq3dcmAw0MeFCb901q\new/1Kq1kGsRUqcf/kZvQ3XMjjzp0EX9gzpMy0Mo7BCFwymvqEndAiSCvHuOzOa3+\nEwsLDtmuKYDuUQtrH66KLw4EzZRxN8EGmqmblkk2ccpqBpxJcRGl0qm7OP9yRF+Q\niDTauYozIQKBgQDPhY1YsupqN19go2n8E/ORAge1+Dn8OrJIku1D/o9O9niQRUpD\nkdudXyOV84M1bZUJEDtBrVxVaaBQx7xWlQWcA5VDF5mKT3b7oc7azivkLYwdOZ4r\nPrxlriT9VcYF69lPByzBjCh6fmWTzpL6jyXtiwqw8zueM5tmlM+47LpfWQKBgQDb\nmfbYrCVCny5Gxc339nTJ0fzsALuNCqH+3ofsv/0XJVqN3j7g+4k7Rs1xZ5gOvxtM\nZkwmcuPmMwLi3CM6HwwGIyokfHRktStbpwJ+hofiMOcoZwPu7BSdrHdmDBgRp5DF\nFwYE2uM8arItpy+ilZ37zkPKucS3zhty0SRyMlLugQKBgQDCHcHbBlvhEd2XN61l\nHoj0I7eXkweDbzxbxIz453ngmbGmBkG/VQ8Ww01SzTnSyXLZgQ038bfgTMSzb0cU\n8Km5nNKh5iS9zB9bmEpH+ohiMLTJ5zQxsllOuzP7ORtlrNzHbyyKAg71N7pg0mi/\nUfHo3vosiU+F5tf5mAIxzvPgUA==\n-----END PRIVATE KEY-----\n",
            'client_email' => 'findgap@testy-406703.iam.gserviceaccount.com',
            'client_id' => '116914720565306585393',
            'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
            'token_uri' => 'https://oauth2.googleapis.com/token',
            'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
            'client_x509_cert_url' => 'https://www.googleapis.com/robot/v1/metadata/x509/findgap%40testy-406703.iam.gserviceaccount.com',
            'universe_domain' => 'googleapis.com',
        ]);

        $this->client->setAccessType('offline');
        $this->client->setPrompt('select_account consent');
    }

    public function getClient(): Google_Client
    {
        return $this->client;
    }
}