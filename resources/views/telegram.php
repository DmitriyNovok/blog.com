<?php

/**
 *
 *  Set webhook
 *  https://api.telegram.org/bot935790601:AAEJP5HwHkkppoK6rL6D3eVESBx1Q_s1j8Y/setWebhook?url=https://kubinx.herokuapp.com/tgbot
 *
 *  Check webhook
 *  https://api.telegram.org/bot935790601:AAEJP5HwHkkppoK6rL6D3eVESBx1Q_s1j8Y/getWebhookInfo
 *
 *  https://api.telegram.org/bot935790601:AAEJP5HwHkkppoK6rL6D3eVESBx1Q_s1j8Y/getUpdates
 *
 *
 * curl -X GET "https://api.telegram.org/bot935790601:AAEJP5HwHkkppoK6rL6D3eVESBx1Q_s1j8Y/sendMessage?chat_id=581117342&text=Hello telega"
 *
 **/



$token = '935790601:AAEJP5HwHkkppoK6rL6D3eVESBx1Q_s1j8Y';

$bot = new \TelegramBot\Api\Client($token);



$bot->run();

// команда для start
$bot->command('start', function ($message) use ($bot) {
    $answer = 'Welcome!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

// команда для помощи
$bot->command('help', function ($message) use ($bot) {
    $answer = 'Commands:
/help - reference';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

http_response_code(200);
