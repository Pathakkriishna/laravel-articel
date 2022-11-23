<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <h1>login</h1>
    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif
    <form action="{{route('loginUser')}}" method="post">
        @csrf

        <input type="email" name="email" id="" placeholder="Enter your email/user Id here">
        <span>@error('email') {{$message}} @enderror</span><br> <br>
        <input type="password" name="password" id="" placeholder="Enter Password"> 
        <span>@error('password') {{$message}} @enderror</span><br><br>
        <button type="submit">Sign Up</button>
    </form>

    </form>
</body>

</html>