<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decline Appointment Request</title>
</head>
<body>
    <h1>Red Cross Calapan</h1>
    <p>Hello {{$mail['user_fname']}}, we apologize that your appointment has been decline for this kind of reason.</p>
    <p>{{$mail['reason_for_decline']}}</p>
    <p>by staff{{ $mail['emp_fname']}}</p>
</body>
</html>