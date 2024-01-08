<!DOCTYPE html>
<html>
<head>
    <title>Even Numbers between 1 and 100</title>
</head>
<body>
    <h1>Even Numbers between 1 and 100</h1>
    <ul>
        @foreach($evenNumbers as $number)
            <li>{{ $number }}</li>
        @endforeach
    </ul>
    <p>Total even numbers: {{ $countEvenNumbers }}</p>
</body>
</html>
