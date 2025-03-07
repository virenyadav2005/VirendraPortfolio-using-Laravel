<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viren Portfolio</title>
    {{-- <link rel="stylesheet" type="text/css" href="indexcss.css"> --}}
    <link rel="shortcut icon" href="logo-black.png" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</head>
<body>
    <div class="logo-head">
        <div class="logo">
            <img src="logo-black.png" alt="logo" height="100px" width="150px">
        </div>
    <header>
        <p class="head1"> <strong> <i>Welcome To Virendra's Portfolio</i></strong></h1>
        </header>
    </div>

    <nav class="menu">
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/Education')}}">Education</a></li>
            <li><a href="{{url('/Skills')}}">Skills</a></li>
            <li><a href="{{url('Certificates')}}">Certification </a></li>
            <li><a href="{{url('/Internships')}}">Internship's</a></li>
            <li><a href="{{url('/Projects')}}">Projects</a></li>
            <li><a href="{{url('/Contact-me')}}">Contact</a></li>
        </ul>
    </nav>