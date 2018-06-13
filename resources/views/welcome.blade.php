<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vue CRUD Application</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app"></div>
    <script type="text/javascript">
        window.Laravel = <?= json_encode([ 'csrfToken' => csrf_token() ]) ?>
    </script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>