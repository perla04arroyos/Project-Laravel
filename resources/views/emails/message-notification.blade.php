<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>You received a message from: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
    <p><strong>Subject: </strong>{{ $msg['subject'] }}</p>
    <p><strong>Content: </strong>{{ $msg['content'] }}</p>
</body>
</html>