<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Cross | Account Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="flex justify-center align-center">
    <h1>Verify</h1>
    <p >Please click on the following link to verify your account:</p>
    <div class="text-sm font-medium text-gray-500 dark:text-gray-400 mt-10">
        <a class="bg-green-500 p-4 rounded" href="{{ url('auth/verify', ['token' => $mail['token']]) }}">Activate Account</a>
    </div>   
</body>
</html>