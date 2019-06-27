<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{ config('app.headerTitleText') }}</title>

    @include('layouts.partials.head')

</head>
<body>

<div id="app">
    <section id="main">
        <section id="content">
            @yield('content')
        </section>
    </section>
</div>

<div id="modal-placeholder"></div>

</body>
</html>
