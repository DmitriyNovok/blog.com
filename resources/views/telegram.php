<?php

/**
 *
 *  Set webhook
 *  https://api.telegram.org/bot935790601:AAEJP5HwHkkppoK6rL6D3eVESBx1Q_s1j8Y/setWebhook?url=https://kubinx.herokuapp.com/tgbot
 *
 *  Check webhook
 *  https://api.telegram.org/bot935790601:AAHwttXzQNLq8LLajDtyfVl5pdixN-kcBRo/getWebhookInfo
 *
 *  https://api.telegram.org/bot935790601:AAHwttXzQNLq8LLajDtyfVl5pdixN-kcBRo/getUpdates
 *
 *
 * curl -X GET "https://api.telegram.org/bot935790601:AAHwttXzQNLq8LLajDtyfVl5pdixN-kcBRo/sendMessage?chat_id=581117342&text=Hello telega"
 *
 **/

$token = '935790601:AAEJP5HwHkkppoK6rL6D3eVESBx1Q_s1j8Y';

$bot = new \TelegramBot\Api\Client($token);
// команда для start
$bot->command('start', function ($message) use ($bot) {
    $answer = 'Добро пожаловать!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

// команда для помощи
$bot->command('help', function ($message) use ($bot) {
    $answer = 'Команды:
/help - вывод справки';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

$bot->run();