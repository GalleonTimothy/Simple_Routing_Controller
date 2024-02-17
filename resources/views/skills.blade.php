<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <title>Skills</title>
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
                <a href="{{ url('skills')}}" class="active">
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
