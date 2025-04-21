# ⚡ ID Fetcher Bot (PHP)

A fast and minimal Telegram bot built using PHP. Instantly fetch Telegram **User IDs**, **Group Chat IDs**, and **Forwarded User IDs** — perfect for bot developers, group admins, and power users.

<p align="center">
  <a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-7.0%2B-blue.svg?style=flat-square" /></a>
  <a href="https://t.me/Unknown_RK01"><img src="https://img.shields.io/badge/Developer-%40Unknown__RK01-blueviolet?style=flat-square" /></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-green.svg?style=flat-square" /></a>
</p>

---

## 🚀 Features

- Fetch **User ID** in private chats  
- Get **Group Chat ID** or **Channel ID**  
- Detect **Forwarded User ID**  
- Works with both **webhook** and **getUpdates**  
- Lightweight and dependency-free  
- Easy to extend for advanced use  

---

## ⚙️ Requirements

- PHP 7.0 or higher  
- Telegram Bot Token (via [@BotFather](https://t.me/BotFather))  
- HTTPS-enabled web server (for webhook support)  

---

## 🔧 Setup

1. Upload the `chatidbot.php` file to a publicly accessible folder on your PHP-supported web server.

2. Open the file and set your Telegram bot token:

   ```php
   $botToken = 'YOUR_BOT_TOKEN_HERE';

3. Set the webhook for your bot by visiting the following URL (replace placeholders):

https://api.telegram.org/bot{YOUR_BOT_TOKEN}/setWebhook?url=https://yourdomain.com/chatidbot.php

**Example:**

https://api.telegram.org/bot123456:ABCDEF/setWebhook?url=https://example.com/chatidbot.php




---

💡 Usage

Private Chat → Bot replies with your Telegram User ID

Group/Channel → Bot replies with chat ID when someone sends a message

Forwarded Message → Bot replies with original sender’s User ID



---

🖼️ Example Output

Your Telegram ID: 123456789
Chat ID: -1009876543210
Forwarded From User ID: 987654321


---

🛠️ Customization Ideas

Add logging of user data

Restrict usage to specific Telegram IDs

Add inline buttons or commands



---

👨‍💻 Developer

Developed and maintained by @Unknown_RK01


---

⚖️ License

Released under the MIT License — use, modify, and share freely.


---

<p align="center">
  Built for Telegram devs who value speed, simplicity, and control.
</p>
```
