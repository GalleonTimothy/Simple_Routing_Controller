<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ url('css/about.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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




    <div class="container">
        <div class="about-me">
            <span>ABOUT</span> <div class="horizontal"><hr></div>
        </div>

        <div class="about-info">
            <img src="{{ asset('assets/about-me.jpg') }}" alt="About Me">
            <div class="info-text">
                <div class="header">IT Student | University of the Cordilleras <br>
                    <span>Hello I'm Timothy Galleon an aspiring Web Developer, Drug Addict. I love and enjoy coding so much!</span>
                </div>

                    <div class="personal-details">
                        <span><span class="arrow-left">&#62;</span> Phone: 09153074905</span>
                        <span><span class="arrow-left">&#62;</span> City: Dasol, Pangasinan</span>
                        <span><span class="arrow-left">&#62;</span> School: University of the Cordilleras</span>
                        <span><span class="arrow-left">&#62;</span> College Level: Third Year</span>
                        <span><span class="arrow-left">&#62;</span> Email: timothyguiang11142001@gmail.com</span>
                    </div>

                    <p>Motivated and detail-oriented Web Developer with a passion for crafting seamless and responsive user experiences. With a solid foundation in front-end and back-end technologies, I excel in translating complex ideas into clean, maintainable code. My commitment to staying abreast of the latest industry trends ensures that the websites and applications I develop are not only functional but also incorporate cutting-edge design and usability principles.</p>
            </div>
        </div>




        <div class="about-me">
            <span>INTERESTS</span> <div class="horizontal"><hr></div>
        </div>


        <div class="interests">
            <div class="interest-box">
                <span class="movie"><i class='bx bxl-youtube'></i></span> Watching Movies
            </div>

            <div class="interest-box">
                <span class="internet"><i class='bx bx-wifi'></i></span> Browsing Internet
            </div>

            <div class="interest-box">
                <span class="music"><i class='bx bxl-spotify'></i></span> Listening to Music
            </div>

            <div class="interest-box">
                <span class="games"><i class='bx bxl-steam' ></i></span>Online Games
            </div>

            <div class="interest-box">
                <span class="cycling"><i class='bx bx-cycling'></i></span>Cycling
            </div>

            <div class="interest-box">
                <span class="alcohol"><i class='bx bxs-drink'></i></span>Alcohol
            </div>

            <div class="interest-box">
                <span class="drugs"><i class='bx bxs-bong' ></i></span>Drugs
            </div>
        </div>



        <blockquote>
            <p>"Pag binato ka ng bato, tagain mo sa ulo."</p>
            <cite>— Timothy Galleon</cite>
        </blockquote>






    </div>




</body>
</html>
