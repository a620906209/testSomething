<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div id="app"></div>
    <form id="form">
        @csrf
        <label for="input-message">Message:</label>
        <input id="input-message" type="text" placeholder="">
    </form>

    <script src="{{ mix('js/app.js') }}">

    </script>
</body>
</html>
