<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>


    <header>
        <ul>
            <li>
                <a href="{{ route('contacts') }}">Contatti</a>
            </li>
        </ul>
    </header>

    <h1>Benvenuto {{ $name }} {{ $lastname }}</h1>
    <h3>Vivi a {{ $city }}</h3>
    <h5>Hai {{ $age }} anni</h5>
</body>

</html>