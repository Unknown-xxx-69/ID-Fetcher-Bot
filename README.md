<h1 align="center">⚡ ChatID Bot (PHP) ⚡</h1>
<p align="center">
  <i>A fast, minimalistic Telegram bot that reveals User IDs, Group Chat IDs, and Channel IDs with ease.</i><br>
    <b>Powered by PHP | Built for Developers, Admins & Bot Creators</b>
    </p>

    <p align="center">
      <a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-7.0%2B-blue.svg?style=flat-square" /></a>
        <a href="https://t.me/Unknown_RK01"><img src="https://img.shields.io/badge/By-%40Unknown__RK01-blueviolet?style=flat-square" /></a>
          <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-green.svg?style=flat-square" /></a>
          </p>

          ---

          ## 🚀 Features

          - Fetch **User ID** in private chats
          - Detect **Chat ID** in groups and channels
          - Extract **Forwarded User IDs**
          - Works with **getUpdates** or **webhook**
          - Lightweight and fast
          - Zero dependencies

          ---

          ## ⚙️ Requirements

          - PHP 7.0 or higher
          - Telegram Bot Token from [@BotFather](https://t.me/BotFather)
          - Web server with HTTPS support (for webhook usage)

          ---

          ## 🔧 Installation

          1. **Clone or upload** the `chatidbot.php` to a web-accessible PHP server

          2. **Edit your bot token** inside the file:

             ```php
                $botToken = 'YOUR_BOT_TOKEN_HERE';

                3. Set Telegram webhook (replace placeholders with actual values):

                https://api.telegram.org/bot<YOUR_BOT_TOKEN>/setWebhook?url=https://yourdomain.com/chatidbot.php




                ---

                💡 Usage

                Send any message in private chat → Get your User ID

                Add bot to a group and send a message → Get Group Chat ID

                Forward a message from someone → Bot replies with original sender's ID



                ---

                🖼️ Example Output

                Your Telegram ID: 123456789
                Chat ID: -1009876543210
                Forwarded From User ID: 1122334455


                ---

                🛠️ Customization Tips

                Add message logging

                Implement access restrictions (admins only)

                Extend with inline keyboards or commands


                Fork it. Hack it. Make it yours.


                ---

                👨‍💻 Developer

                Made with dedication by @Unknown_RK01


                ---

                ⚖️ License

                Licensed under the MIT License. Feel free to use, modify, and distribute.


                ---

                <p align="center">
                  Built for Telegram Bot Developers & Admins who need speed.
                  </p>
