<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Red Cross Calapan Membership</title>
</head>
<body>
  <h1>Membership Activated</h1>
  <p> Dear {{$mail['mem_fname']}}, {{$mail['mem_lname']}}</p>
  <p>We are here to inform you that your membership is now activated. Here are your infomation about your membership program.</p>
  <p>Full Name: {{$mail['mem_fname']}} {{$mail['mem_mname']}}
     {{$mail['mem_lname']}}</p>
     <p>Membership type: {{$mail['mem_category']}}</p>
     <p>Membership price: {{$mail['mem_price']}}</p>
  <p>Validity: {{$mail['mem_start_at']}} to {{$mail['mem_end_at']}}</p>

  <p>Note: Membership Program are exclusive only for people of Oriental Mindoro!</p>
  
</body>
</html>