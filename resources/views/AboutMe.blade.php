<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>
    <button><a href="/AboutMe">AboutMe</a></button>
    <button><a href="/Skills">Skills</a></button>
    <button><a href="/Hobbies">Hobbies</a></button>

    Hello, I am {{ $data['name'] }} {{ $data['surname'] }}, My birthday is {{ $data['bday'] }} and I am {{ $data['age'] }}.
</body>
</html>