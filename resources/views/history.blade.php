<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Storia</title>
</head>

<body>
    <header>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>
                <a href="{{ route('contacts') }}">Contatti</a>
            </li>
        </ul>
    </header>
    <h1>{{ $title }}</h1>
    <h5>{{ $paragraph }}</h5>
</body>

</html>