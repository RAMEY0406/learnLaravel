<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <a href="{{url('/')}}">Home</a> |
    <a href="{{url('contact')}}">Contact</a> |
    <a href="{{url('about')}}">About</a> |
    <a href="{{url('register')}}">Register</a>
    <h1>User Register</h1>
    <hr>
    <form action="{{url('register/save')}}" method="POST">
        {{csrf_field()}}
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Phone: <input type="text" name="phone"><br>
        <button>Submit</button>
    </form>
</body>
</html>