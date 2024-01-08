<!DOCTYPE html>
<html>
<head>
    <title>Numbers from 100 to 1</title>
</head>
<body>
    <h1>Numbers from 100 to 1</h1>
    <ul>
        @foreach($numbers as $number)
            <li>{{ $number }}</li>
        @endforeach
    </ul>
</body>
</html>
