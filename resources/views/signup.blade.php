<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
</head>

<body>
    <h1>sign Up</h1>

    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif
    
    <form action="{{route('signupUser')}}" method="post">
        @csrf
        <label>Name : </label>
        <input type="text" name="name" id="" placeholder="Enter your name here"> <br>
        <span>@error('name') {{$message}} @enderror</span><br>
        <label>Email : </label>
        <input type="email" name="email" id="" placeholder="Enter your email Id"> <br>
        <span>@error('email') {{$message}} @enderror</span><br>
        <label>Password : </label>
        <input type="password" name="password" id="" placeholder="Enter Password"> <br>
        <span>@error('password') {{$message}} @enderror</span><br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>