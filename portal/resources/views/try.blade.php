<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Try</title>
</head>
<body>
  @if(session('success'))
  <span style="color:yellowgreen">{{session('success')}}</span>
  @elseif(session('failed'))
  <span style="color:red">{{session('failed')}}</span>
  @endif
  <form action="{{url('tryload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="tryfile" class="form-control @error('tryfile') is-invalid @enderror">
    @error('tryfile')
   <span style="color:red">{{$message}}</span>
    @enderror
    <input type="submit" value="Submit">
  </form>

  @foreach($Payments as $pay)
  <img src="{{$pay->tryfile}}" height="100px" alt="try">
  @endforeach
</body>
</html>