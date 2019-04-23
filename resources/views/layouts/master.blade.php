<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">

    <link rel="stylesheet" href="f:\INHA sources\2 year\IP\bootstrap-3.4.1-dist\bootstrap-3.4.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="f:\INHA sources\2 year\IP\bootstrap-3.4.1-dist\bootstrap-3.4.1-dist\css\<bootstrap-the></bootstrap-the>me.min.css">
    <link rel="stylesheet" href="f:\INHA sources\2 year\IP\bootstrap-3.4.1-dist\bootstrap-3.4.1-dist\css\bootstrap.min.css">
    <script src="f:\INHA sources\2 year\IP\bootstrap-3.4.1-dist\bootstrap-3.4.1-dist\js\bootstrap.min.js"></script>
    <script src="f:\INHA sources\2 year\IP\bootstrap-3.4.1-dist\bootstrap-3.4.1-dist\js\npm.js"></script>
    <script src="f:\INHA sources\2 year\IP\bootstrap-3.4.1-dist\bootstrap-3.4.1-dist\js\boorstrap.js"></script>
    <script src="f:\INHA sources\2 year\IP\bootstrap-3.4.1-dist\bootstrap-3.4.1-dist\js\jquery.js"></script>
    <script src="f:\INHA sources\2 year\IP\bootstrap-3.4.1-dist\bootstrap-3.4.1-dist\js\jquery-slim.js"></script>
</head>
<body>
@include('partials.header')
<div class="container">
    @yield('content')
</div>
</body>
</html>
