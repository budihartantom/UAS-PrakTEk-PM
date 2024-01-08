<!DOCTYPE html>
<html>
<head>
    <title>Odd Numbers between 1 and 100</title>
</head>
<body>
    <h1>Odd Numbers between 1 and 100</h1>
    <ul>
        @foreach($oddNumbers as $number)
            <li>{{ $number }}</li>
        @endforeach
    </ul>
</body>
</html>
