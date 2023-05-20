<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Account | Red Cross | Oriental Mindoro</title>
    
</head>
<body>
    <h1>Reset Password</h1>
    <p>Please click on the following link to reset your password:</p>
    <p><a href="{{ url('/confirm', ['mail' => $mail['email']]) }}">Confrim</a></p>
    
</body>
</html>