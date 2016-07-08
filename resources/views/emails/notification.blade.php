<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    Hello {{ $user->name }}!

    {{-- <p>Current sign in at: {{ $user->current_sign_in_at }}</p> --}}
    <p>Current sign in ip: {{ $user->current_sign_in_ip }}</p>
</body>
</html>
