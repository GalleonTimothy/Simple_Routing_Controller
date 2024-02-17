<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <title>Hobbies</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="{{ url('/')}}">
                &#60;/Timmy&#62;
            </a>
        </div>
        <ul>
            <li>
                <a href="{{ url('about-me')}}">
                    About Me
                </a>
            </li>
            <li>
                <a href="{{ url('skills')}}">
                    Skills
                </a>
            </li>
            <li>
                <a href="{{ url('hobbies')}}" class="active">
                    Hobbies
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>
