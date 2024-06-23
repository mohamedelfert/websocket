<!DOCTYPE html>
<html>
<head>
    <title>Laravel WebSocket Example</title>
    <script src="{{ mix('js/echo.js') }}" defer></script>
    <style>
        .message {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<h1>Laravel WebSocket</h1>
<div id="messages"></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        Echo.channel('message-channel')
            .listen('MessageSent', (e) => {
                const messageDiv = document.createElement('div');
                messageDiv.className = 'message';
                messageDiv.innerText = e.message;
                document.getElementById('messages').appendChild(messageDiv);
            });
    });
</script>
</body>
</html>
