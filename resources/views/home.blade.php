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
        <ul class="d_flex jc_center">
            <li class="m_40"><a href=" {{ url('/') }} ">Home</a></li>
            <li class="m_40"><a href=" {{ url('/blog') }} ">Blog</a></li>
            <li class="m_40"><a href=" {{ route('pageCareers') }} ">Careers</a></li>
            <li class="m_40"><a href=" {{ route('pageAbout') }} ">About</a></li>
        </ul>
    </nav>

    <h2 class="t_center c_green">Random number: {{$numeroCasuale}}</h2>
    
    <style>
        html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .d_flex {
            display: flex;
        }

        .jc_center {
            justify-content: center;
        }

        .m_40 {
            margin: 0 40px;
        }

        .t_center {
            text-align: center;
        }

        .c_green {
            color: green;
        }

    </style>
</body>
</html>