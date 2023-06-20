<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titlePage ?? 'Questa pagina non ha titolo' }}</title>
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
</head>
<body>
    <x-navbar/>
<div class="min-vh-100">
    {{$slot}}
</div>


</body>
</html>