<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet"
        href="{{ asset('template_fe/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template_fe/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('template_fe/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('template_fe/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/style.css') }}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
        id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Clyde<span>.</span></a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                    <li class="nav-item"><a href="#certificates-section" class="nav-link"><span>Certificates</span></a>
                    </li>
                    <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>

                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Log Out</button>
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endauth

                </ul>
            </div>
        </div>
    </nav>


    <x-home></x-home>

    <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url(template_fe/images/);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">My Intro</span>
                                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;" id="about">About
                                    Me</h2>
                                @foreach($about as $about)
                                <p>{{ $about->description }}</p>
                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <li class="d-flex"><span>Name:</span> <span>{{ $about->name }}</span></li>
                                    <li class="d-flex"><span>Gender:</span> <span>{{ $about->gender }}</span>
                                    </li>
                                    <li class="d-flex"><span>Job:</span> <span>{{ $about->pekerjaan }}</span></li>
                                </ul>
                                @endforeach
                            </div>

                            <div class="col-md-12">
                                <div class="my-interest d-lg-flex w-100">
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-listening"></span>
                                        </div>
                                        <div class="text">Music</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-suitcases"></span>
                                        </div>
                                        <div class="text">Travel</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-video-player"></span>
                                        </div>
                                        <div class="text">Movie</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-football"></span>
                                        </div>
                                        <div class="text">Sports</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading" id="skill">Skills</span>
                    <h2 class="mb-4">My Skills</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                    </p>
                </div>
            </div>
            <div class="row progress-circle mb-5">
                @foreach($skill as $skill)
                <div class="col-lg-4 mb-4">
                    <div class="bg-white rounded-lg shadow p-4">
                        <h2 class="h5 font-weight-bold text-center mb-4">{{ $skill->title }}</h2>
                        <!-- Progress bar 1 -->
                        <div class="mx-auto">
                            <center>
                                <p>{{ $skill->description }}</p>
                            </center>
                        </div>
                        <!-- END -->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading" id="certificate">My Certificate</span>
                    <h2 class="mb-4">Here are some of the certificates I have</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            @foreach($certificate as $certificate)
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-3d-design"></span></div>
                        <div class="media-body">

                            <h3 class="heading mb-3">{{ $certificate->name }}</h3>

                            <p>{{ $certificate->description }}</p>
                            <span class="subheading">{{ $certificate->issued_at }}</span>
                            <p class="text-gray-800">By {{ $certificate->issued_by }}</p>
                            <center>
                                @if ($certificate->file)
                                <a href="{{ asset('storage/certificate/' . $certificate->file) }}" class="btn btn-info"
                                    target="_blank">View Certificate</a>
                                @else
                                <span>No File Uploaded</span>
                                @endif
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="ftco-section ftco-project">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Accomplishments</span>
                    <h2 class="mb-4" id="project">my Projects</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach($project as $project)
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url('{{ $project->photo ? asset('storage/' . $project->photo) : asset('storage/photo/default.jpg') }}');">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">{{ $project->name }}</a></h3>
                            <p>{{ $project->description }}</p>
                            <span>{{ $project->date }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading" id="contact">Contact us</span>
                    <h2 class="mb-4">Have a Question?</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                    </p>
                </div>
            </div>

            <div class="row block-9">
                <div class="col-md-8">
                    <form action="{{ route('contact.store') }}" class="bg-light p-4 p-md-5 contact-form" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="sosial_media" type="text" class="form-control"
                                        placeholder="Instagram: @blabla_2">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-md-4 d-flex pl-md-5">
                    <div class="row">
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text">
                                <p><span>Phone:</span> <a href="tel://1234567920">+62 813-3797-4043</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <div class="text">
                                <p><span>Email:</span> <a href="mailto:info@yoursite.com">rofinugraha549@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="text">
                                <p><span>Website</span> <a href="#">yoursite.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="map" class="map"></div> -->
                </div>
            </div>
        </div>
    </section>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Lets talk about</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia,
                            there live the blind texts.</p>
                        <p><a href="#" class="btn btn-primary">Learn more</a></p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Design</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Development</a>
                            </li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Business Strategy</a>
                            </li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Data Analysis</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Graphic Design</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St.
                                        Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392
                                            3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This is made with <i class="fa fa-heart" aria-hidden="true"></i>
                        by <a href="https://rofi.com" target="_blank">rofingrh</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('template_fe/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template_fe/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('template_fe/js/popper.min.js') }}"></script>
    <script src="{{ asset('template_fe/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template_fe/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('template_fe/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('template_fe/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('template_fe/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template_fe/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template_fe/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('template_fe/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{ asset('template_fe/js/google-map.js') }}"></script>

    <script src="{{ asset('template_fe/js/main.js') }}"></script>

</body>

</html>