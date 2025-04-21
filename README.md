<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>⚡ ID Fetcher Bot</title>
  <style>
    body {
      background-color: #121212;
      color: #E0E0E0;
      font-family: 'Courier New', Courier, monospace;
      padding: 20px;
    }
    h1, h2, h3 {
      color: #00FF00;
    }
    a {
      color: #1E90FF;
      text-decoration: none;
    }
    .badge {
      background-color: #333;
      padding: 5px 10px;
      border-radius: 5px;
      color: #fff;
      font-size: 14px;
      margin: 5px;
    }
    .button {
      background-color: #1E90FF;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }
    .button:hover {
      background-color: #4CAF50;
    }
    .content {
      background-color: #1E1E1E;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    .code-block {
      background-color: #333;
      padding: 10px;
      border-radius: 5px;
      font-family: 'Courier New', Courier, monospace;
      color: #00FF00;
      overflow-x: auto;
      white-space: nowrap;
    }
    .badge-link {
      background-color: #00BFFF;
      color: #fff;
    }
    .badge-link:hover {
      background-color: #1E90FF;
    }
  </style>
</head>
<body>

  <h1>⚡ **ID Fetcher Bot (PHP Based)**</h1>
  <p>An advanced, lightning-fast Telegram bot built with PHP, designed to fetch **User IDs**, **Group Chat IDs**, and **Forwarded User IDs** instantly. Whether you're a bot developer, group admin, or a power user, this tool is perfect for you.</p>
  
  <div class="content">
    <h2>🚀 Features</h2>
    <ul>
      <li>🌟 Fetch **User ID** in private chats</li>
      <li>🌐 Retrieve **Group Chat ID** or **Channel ID**</li>
      <li>🔄 Detect **Forwarded User ID**</li>
      <li>🔧 Supports both **webhook** and **getUpdates**</li>
      <li>🧳 Lightweight and **dependency-free**</li>
      <li>🛠️ Easy to **extend** for advanced features</li>
    </ul>
  </div>

  <div class="content">
    <h2>⚙️ Requirements</h2>
    <ul>
      <li>PHP 7.0 or higher</li>
      <li>Telegram Bot Token (via <a href="https://t.me/BotFather" class="badge badge-link" target="_blank">BotFather</a>)</li>
      <li>HTTPS-enabled web server (for webhook support)</li>
    </ul>
  </div>

  <div class="content">
    <h2>🔧 Setup Instructions</h2>
    <ol>
      <li>Upload the <code class="code-block">chatidbot.php</code> file to a publicly accessible folder on your PHP-supported web server.</li>
      <li>Open the file and set your Telegram bot token:</li>
      <pre class="code-block">  $botToken = 'YOUR_BOT_TOKEN_HERE';</pre>
      <li>Set the webhook for your bot by visiting the following URL (replace placeholders):</li>
      <pre class="code-block">https://api.telegram.org/bot{YOUR_BOT_TOKEN}/setWebhook?url=https://yourdomain.com/chatidbot.php</pre>
    </ol>
  </div>

  <div class="content">
    <h2>💡 Usage</h2>
    <p><strong>Private Chat:</strong> The bot replies with your Telegram User ID.</p>
    <p><strong>Group/Channel:</strong> The bot replies with the chat ID when someone sends a message.</p>
    <p><strong>Forwarded Message:</strong> The bot replies with the original sender’s User ID.</p>
  </div>

  <div class="content">
    <h2>🖼️ Example Output</h2>
    <p>Your Telegram ID: <code class="code-block">123456789</code></p>
    <p>Chat ID: <code class="code-block">-1009876543210</code></p>
    <p>Forwarded From User ID: <code class="code-block">987654321</code></p>
  </div>

  <div class="content">
    <h2>🛠️ Customization Ideas</h2>
    <ul>
      <li>🔒 Add logging of user data for tracking purposes.</li>
      <li>🚫 Restrict usage to specific Telegram IDs.</li>
      <li>⚡ Add inline buttons or commands for enhanced interactivity.</li>
    </ul>
  </div>

  <div class="content">
    <h2>👨‍💻 Developer</h2>
    <p>Created and maintained by <a href="https://t.me/Unknown_RK01" class="badge">Unknown_RK01</a></p>
  </div>

  <div class="content">
    <h2>⚖️ License</h2>
    <p>This project is licensed under the MIT License. Feel free to use, modify, and share it!</p>
  </div>

  <p align="center">
    🚀 Built for <strong>Telegram developers</strong> who value speed, simplicity, and complete control over their bots.
  </p>

  <p align="center">
    <button class="button">Get Started</button>
  </p>
</body>
</html>
