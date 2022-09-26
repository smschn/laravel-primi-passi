<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi passi con Laravel</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href=" {{ url('/') }} ">Home</a></li>
            <li><a href=" {{ url('/blog') }} ">Blog</a></li>
            <li><a href=" {{ route('pageCareers') }} ">Careers</a></li>
            <li><a href=" {{ route('pageAbout') }} ">About</a></li>
        </ul>
    </nav>

    <h2 style='color:green'>Random number: {{$numeroCasuale}}</h2>
    
</body>
</html>