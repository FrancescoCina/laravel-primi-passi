<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
</head>

<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li><a href="{{ route('history') }}">Storia</a></li>
        </ul>
    </header>
    <div>
        <h1>I miei contatti</h1>
        <ul>
            @forelse ($contacts as $contact)
            <li>
                {{ $contact }}
            </li>
            @empty
            <p>No contacts</p>
            @endforelse
        </ul>
    </div>
</body>

</html>