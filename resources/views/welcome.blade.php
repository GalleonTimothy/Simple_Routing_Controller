<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <title>Welcome</title>
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
                <a href="{{ url('hobbies')}}">
                    Hobbies
                </a>
            </li>
        </ul>
    </nav>



    <div class="container">
        <div class="contents">
            <div class="title-section">
            <div class="title">
                Hi There! <br> I'm Timothy Galleon <br> <span>Web Developer</span>
            </div>
            <div class="img-box">
                <img src="{{ asset('assets/profile.jpg') }}" alt="Example Image">
            </div>
            </div>
            <hr>

            <div class="text-info">
                Motivated and detail-oriented Web Developer with a passion for crafting seamless and responsive user experiences. With a solid foundation in front-end and back-end technologies, I excel in translating complex ideas into clean, maintainable code. My commitment to staying abreast of the latest industry trends ensures that the websites and applications I develop are not only functional but also incorporate cutting-edge design and usability principles.
            </div>

        </div>
    </div>


</body>
</html>
