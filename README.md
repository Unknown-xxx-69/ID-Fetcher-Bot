# ⚡ **ID Fetcher Bot (PHP Based)**

An advanced, lightning-fast Telegram bot built with PHP, designed to fetch **User IDs**, **Group Chat IDs**, and **Forwarded User IDs** instantly. Whether you're a bot developer, group admin, or a power user, this tool is perfect for you.

<p align="center">
  <a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-7.0%2B-blue.svg?style=flat-square" /></a>
  <a href="https://t.me/Unknown_RK01"><img src="https://img.shields.io/badge/Developer-%40Unknown__RK01-blueviolet?style=flat-square" /></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-green.svg?style=flat-square" /></a>
</p>

---

## 🚀 **Features**

- 🌟 Fetch **User ID** in private chats
- 🌐 Retrieve **Group Chat ID** or **Channel ID**
- 🔄 Detect **Forwarded User ID**
- 🔧 Supports both **webhook** and **getUpdates**
- 🧳 Lightweight and **dependency-free**
- 🛠️ Easy to **extend** for advanced features

---

## ⚙️ **Requirements**

- PHP 7.0 or higher
- Telegram Bot Token (via [@BotFather](https://t.me/BotFather))
- HTTPS-enabled web server (for webhook support)

---

## 🔧 **Setup Instructions**

1. Upload the `chatidbot.php` file to a publicly accessible folder on your PHP-supported web server.
2. Open the file and set your Telegram bot token:

   ```php
   $botToken = 'YOUR_BOT_TOKEN_HERE';

3. Set the webhook for your bot by visiting the following URL (replace placeholders):

https://api.telegram.org/bot{YOUR_BOT_TOKEN}/setWebhook?url=https://yourdomain.com/chatidbot.php



Example URL:

`https://api.telegram.org/bot123456:ABCDEF/setWebhook?url=https://example.com/chatidbot.php`


---

💡 Usage

Private Chat: The bot replies with your Telegram User ID.

Group/Channel: The bot replies with the chat ID when someone sends a message.

Forwarded Message: The bot replies with the original sender’s User ID.



---

🖼️ Example Output

Your Telegram ID: 123456789

Chat ID: -1009876543210

Forwarded From User ID: 987654321



---

🛠️ Customization Ideas

🔒 Add logging of user data for tracking purposes.

🚫 Restrict usage to specific Telegram IDs.

⚡ Add inline buttons or commands for enhanced interactivity.



---

👨‍💻 Developer

Created and maintained by @Unknown_RK01.


---

⚖️ License

This project is licensed under the MIT License. Feel free to use, modify, and share it!


---

<p align="center">
  🚀 Built for <strong>Telegram developers</strong> who value speed, simplicity, and complete control over their bots.
</p><p align="center">
  <a href="https://t.me/Unknown_RK01" target="_blank"><button style="background-color:#1E90FF;color:white;padding:10px 20px;border-radius:5px;">Get Started</button></a>
</p>
