<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebSocket Data Display</title>
</head>
<body>
    <h1>Data dari Server</h1>
    <ul id="data-list"></ul>

    {{-- <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/components/DataListComponent.js') }}"></script> --}}
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/DataListComponent.js')}}"></script>
</body>
</html>
