<!DOCTYPE html>
<html>
<head>
    <title>Prime Numbers between 1 and 100</title>
</head>
<body>
    <h1>Prime Numbers between 1 and 100</h1>
    <ul>
        @foreach($primeNumbers as $number)
            <li>{{ $number }}</li>
        @endforeach
    </ul>
</body>
</html>
