<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon1.jpg')}}"/>

    <title>{{$globalConfigs->site_title}}</title>
    <!-- Fonts -->
    <link href="{{asset("css/app.css")}}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="l5_blog">