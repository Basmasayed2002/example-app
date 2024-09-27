<!DOCTYPE html>
<html>
<head>
    <title>{{ $planet['name'] }}</title>
</head>
<body>
    <h1>{{ $planet['name'] }}</h1>
    <p>{{ $planet['details'] }}</p>
    <a href="{{ url('/planets') }}">Back to list</a>
</body>
</html>
