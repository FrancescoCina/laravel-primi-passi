<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
</head>

<body>
    <div>
        <h1>I miei contatti</h1>
        <ul>
            @forelse ($contacts as $contact)
            <li>{{ $contact }}</li>
            @empty
            <p>No contacts</p>
            @endforelse
        </ul>
    </div>
</body>

</html>