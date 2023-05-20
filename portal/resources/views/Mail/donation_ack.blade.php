<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Acknowledgement</title>
</head>
<body>

  <h1>Donation Acknowledgement</h1>
  
  @if($mail['don_gender']=="Male")
  <strong>
  <p>Hello Mr.{{$mail['don_lname']}}</p>
  </strong>

  @elseif($mail['don_gender']=="Female")
  <p>Hello Ms.{{$mail['don_fname']}}</p>
  @endif
  <p>Thank you for donating us! </p>

  <em>-From Red Cross Family Calapan Chapter</em>
</body>
</html>