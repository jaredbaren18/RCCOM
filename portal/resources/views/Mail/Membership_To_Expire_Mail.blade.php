<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Red Cross Calapan Membership</title>
</head>
<body>
  <h1>Membership Validity</h1>
  <p> Dear {{$mail['mem_fname']}}, {{$mail['mem_lname']}}</p>
  <p>We are here to inform you that your subscription will expire 15 days from this day {{$mail['today']}} and it will end on {{$mail['mem_end_at']}}.
  </p>
  <p>You can renew your insurance within a day before expiration or else it will be expired.</p>

  <p>Note: Membership are exclusive only on people of Oriental Mindoro!</p>
  
</body>
</html>