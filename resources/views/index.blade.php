@php
    $title="I am Home";
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>I am Home</h1>
    <a href="{{ route('user',['id'=>1,'slug' =>'100']) }}">User</a>
    <a href="{{ route('about') }}">About</a>
    <a href="contact">contact</a>
    <a href="welcome">welcome</a>
</body>
</html>


{{-- Comments--}}
{{-- 

//echo something       
{{  }} 


--}}

