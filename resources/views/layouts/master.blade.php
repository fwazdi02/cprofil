
<!doctype html>
<html class="no-js" lang="">
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Agency - Start Bootstrap Theme</title>

        <!-- Font -->
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/clean-blog.min.css" rel="stylesheet">
        <link href="css/me-blog.css" rel="stylesheet">
    </head>
    <body style="font-size: 14px; color: rgba(0,0,0,0.6);">

    @include('layouts.navbar')
    @include('layouts.page-header')
        @yield('content')       
    @include('layouts.footer')
