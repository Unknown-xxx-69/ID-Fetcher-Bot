<?php

$bot_token = "YOUR_BOT_TOKEN";

date_default_timezone_set('Asia/Kolkata');

$content = file_get_contents("php://input");
$update = json_decode($content, true);

$message = $update["message"] ?? null;
$chat_id = $message["chat"]["id"] ?? null;

if (isset($message["text"]) && $message["text"] == "/start") {
    $first_name = $message["from"]["first_name"] ?? "User";
    $user_id = $message["from"]["id"] ?? null;
    $username = $message["from"]["username"] ? "@" . $message["from"]["username"] : "No Username";
    $current_time = date("Y-m-d H:i:s");

    $mess = "<b>🎯 Welcome <a href='tg://user?id=$user_id'>$first_name</a>,\n" .
            "🆔 Your User ID: <code>$chat_id</code>\n\n" .
            "📝 About This Bot\n" .
            "This bot helps you find IDs of:\n" .
            "• Users\n" .
            "• Bots\n" .
            "• Groups\n" .
            "• Channels\n\n" .
            "⚡️ Bot Status\n" .
            "• Time: <code>$current_time</code>\n" .
            "• Status: <code>Active</code>\n\n" .
            "💡 Select any button below to get ID</>";

    sendMessage($chat_id, $mess, "HTML", getKeyboard());
    exit;
}

if (isset($message["user_shared"])) {
    $shared_user_id = $message["user_shared"]["user_id"];
    $request_id = $message["user_shared"]["request_id"];
    $is_bot = ($request_id == 2) ? "Yes" : "No";
    $time = date("H:i:s");

    $type = ($is_bot == "Yes") ? "🤖 𝗕𝗼𝘁 𝗜𝗻𝗳𝗼" : "👤 𝗨𝘀𝗲𝗿 𝗜𝗻𝗳𝗼";

    $text = "$type:\n\n" .
            "🆔 𝗜𝗗: <code>$shared_user_id</code>\n" .
            "⚡️ 𝗥𝗲𝗾𝘂𝗲𝘀𝘁 𝗜𝗗: <code>$request_id</code>\n" .
            "🤖 𝗜𝘀 𝗕𝗼𝘁: $is_bot\n\n" .
            "📊 𝗔𝗱𝗱𝗶𝘁𝗶𝗼𝗻𝗮𝗹 𝗜𝗻𝗳𝗼:\n" .
            "⏰ 𝗙𝗲𝘁𝗰𝗵𝗲𝗱: <code>$time</code>\n\n" .
            "💡 𝗧𝗶𝗽: <code>Click on any text in this format to copy it!</code>\n" .
            "👨‍💻 𝗕𝗼𝘁 𝗯𝘆: @BotVerseRavi";

    sendMessage($chat_id, $text, "HTML");
    exit;
}

if (isset($message["chat_shared"])) {
    $shared_chat_id = $message["chat_shared"]["chat_id"];
    $request_id = $message["chat_shared"]["request_id"];
    $time = date("H:i:s");

    if ($request_id == 2) {
        $type = "🤖 𝗕𝗼𝘁 𝗜𝗻𝗳𝗼";
        $is_bot = "Yes";
    } elseif ($request_id == 3) {
        $type = "👥 𝗚𝗿𝗼𝘂𝗽 𝗜𝗻𝗳𝗼";
        $is_bot = "No";
    } elseif ($request_id == 4) {
        $type = "📢 𝗖𝗵𝗮𝗻𝗻𝗲𝗹 𝗜𝗻𝗳𝗼";
        $is_bot = "No";
    } else {
        $type = "📦 𝗖𝗵𝗮𝘁 𝗜𝗻𝗳𝗼";
        $is_bot = "Unknown";
    }

    $text = "$type:\n\n" .
            "🆔 𝗜𝗗: <code>$shared_chat_id</code>\n" .
            "⚡️ 𝗥𝗲𝗾𝘂𝗲𝘀𝘁 𝗜𝗗: <code>$request_id</code>\n" .
            "🤖 𝗜𝘀 𝗕𝗼𝘁: $is_bot\n\n" .
            "📊 𝗔𝗱𝗱𝗶𝘁𝗶𝗼𝗻𝗮𝗹 𝗜𝗻𝗳𝗼:\n" .
            "⏰ 𝗙𝗲𝘁𝗰𝗵𝗲𝗱: <code>$time</code>\n\n" .
            "💡 𝗧𝗶𝗽: <code>Click on any text in this format to copy it!</code>\n" .
            "👨‍💻 𝗕𝗼𝘁 𝗯𝘆: @BotVerseRavi";

    sendMessage($chat_id, $text, "HTML");
    exit;
}

function getKeyboard() {
    return [
        "keyboard" => [
            [
                [
                    "text" => "👤 Share a User",
                    "request_user" => [
                        "request_id" => 1,
                        "user_is_bot" => false
                    ]
                ],
                [
                    "text" => "🤖 Share a Bot",
                    "request_user" => [
                        "request_id" => 2,
                        "user_is_bot" => true
                    ]
                ]
            ],
            [
                [
                    "text" => "👥 Share a Group",
                    "request_chat" => [
                        "request_id" => 3,
                        "chat_is_channel" => false
                    ]
                ],
                [
                    "text" => "📢 Share a Channel",
                    "request_chat" => [
                        "request_id" => 4,
                        "chat_is_channel" => true
                    ]
                ]
            ]
        ],
        "resize_keyboard" => true
    ];
}

function sendMessage($chat_id, $text, $parse_mode = null, $keyboard = null) {
    global $bot_token;

    $url = "https://api.telegram.org/bot$bot_token/sendMessage";

    $payload = [
        "chat_id" => $chat_id,
        "text" => $text
    ];

    if ($parse_mode) {
        $payload["parse_mode"] = $parse_mode;
    }

    if ($keyboard) {
        $payload["reply_markup"] = json_encode($keyboard);
    }

    $options = [
        "http" => [
            "method" => "POST",
            "header" => "Content-Type: application/json",
            "content" => json_encode($payload)
        ]
    ];

    $context = stream_context_create($options);
    file_get_contents($url, false, $context);
}

?>
