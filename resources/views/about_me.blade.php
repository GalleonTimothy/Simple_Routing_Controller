<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <title>About Me</title>
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
                <a href="{{ url('about-me')}}" class="active">
                    About Me
                </a>
            </li>
            <li>
                <a href="{{ url('skills')}}">
                    Skills
                </a>
            </li>
            <li>
                <a href="{{ url('hobbies')}}">
                    Hobbies
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>
