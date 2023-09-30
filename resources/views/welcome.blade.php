<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Abhiram B S</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('user/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ asset($photo->image) }}" alt="" class="img-fluid rounded-circle" width="104px"
                    height="104px">
                <h1 class="text-light"><a href="{{ route('home') }}">{{ $name->name }}</a></h1>
                <div class="social-links mt-3 text-center">
                    @foreach ($socials as $item)
                        <a href="{{ $item->url }}" target="_blank"><i class="{{ $item->icon }}"></i></a>
                    @endforeach
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                    </li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Resume</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Project</span></a></li>
                    <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                            <span>Certifcate</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Contact</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style="width: 100%; height: 100vh; background: url({{ asset($photo->image) }});">
        <div class="hero-container" data-aos="fade-in">
            <h1>{{ $name->name }}</h1>
            <p>I'm <span class="typed" data-typed-items="{{ $roles->implode('name', ', ') }}"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>

                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ asset($about->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{ $about->title }}</h3>

                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{ $about->birthday }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ $about->email }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{ $about->phone }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{ $about->city }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ $about->age }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>{{ $about->degree }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Hobbies:</strong>
                                        <span>{{ $about->hobbies }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Languages Know:</strong>
                                        <span>{{ $about->languages_know }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>

                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $fact->happyclient }}"
                                data-purecounter-duration="5" class="purecounter"></span>
                            <p><strong>Happy Clients</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $fact->project }}"
                                data-purecounter-duration="5" class="purecounter"></span>
                            <p><strong>Projects</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $fact->company }}"
                                data-purecounter-duration="5" class="purecounter"></span>
                            <p><strong>Company</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $fact->certificate }}"
                                data-purecounter-duration="5" class="purecounter"></span>
                            <p><strong>Certificate</strong></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>

                </div>

                <div class="row skills-content">

                    <div class="col-6 offset-3" data-aos="fade-up">
                        @foreach ($skills as $item)
                            <div class="progress">
                                <span class="skill">{{ $item->name }} <i
                                        class="val">{{ $item->number }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->number }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endforeach


                    </div>



                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Education</h3>
                        @foreach ($educations as $item)
                            <div class="resume-item">
                                <h4>{{ $item->name }}</h4>
                                <h5>{{ $item->year }}</h5>
                                <br>
                                <h5>{{ $item->percentage }} %</h5>

                                <p><em>{{ $item->collage }}</em></p>
                                <p>{!! $item->content !!}</p>
                            </div>
                        @endforeach


                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        @foreach ($experiences as $item)
                            <div class="resume-item">
                                <h4>{{ $item->name }}</h4>
                                <h5>{{ $item->year }}</h5>
                                <p><em> {{ $item->location }}</em></p>
                                {!! $item->content !!}
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        @php
            $projectdatas = App\Models\Project::where('status', 1)->get();
            $categories = App\Models\Category::orderBy('name', 'ASC')->get();
            
        @endphp

        <!-- ======= Project Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Personal Project</h2>

                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            @foreach ($categories as $category)
                                <li data-filter=".category{{ $category->id }}">{{ $category->name }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">


                    @foreach ($categories as $category)
                        @php
                            $catwiseProject = App\Models\Project::where('category_id', $category->id)->get();
                        @endphp
                        @foreach ($catwiseProject as $key => $item)
                            <div class="col-lg-4 col-md-6 portfolio-item category{{ $category->id }} filter-active">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                                    <div class="portfolio-links">
                                        <a href="{{ asset($item->image) }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="{{ $item->name }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ $item->url }}" target="_blank" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach



                </div>

            </div>
        </section>
        <!-- End Project Section -->



        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Certificates</h2>

                </div>

                <div class="row">
                    @foreach ($certificates as $item)
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">

                            <img src="{{ asset($item->image) }}" width="350" height="350" alt="">

                        </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Reviews</h2>

                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="fade-up">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $item->content }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset($item->image) }}" class="testimonial-img" alt="">
                                    <h3>{{ $item->company }}</h3>
                                    <h4>{{ $item->ceo }}</h4>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach




                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>

                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Javalli Tudoor Thirthahalli Shivamoga</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>abhirambs97@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+91 9481187122</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d299.01117922203457!2d75.37855853082893!3d13.731131488753528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1695848373441!5m2!1sen!2sus"
                                frameborder="0" style="border:0; width: 100%; height: 290px;"
                                allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{ route('contact-store') }}" method="post" role="form"
                            style="width: 100%;padding: 30px;background: #fff;box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name" style="padding-bottom: 8px;">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6" style="padding-bottom: 8px;margin-bottom: 15px;">
                                    <label for="name" style="padding-bottom: 8px;">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" style="padding-bottom: 8px;">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject">
                                @error('subject')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name" style="padding-bottom: 8px;">Message</label>
                                <textarea class="form-control" name="message" rows="10"></textarea>
                                @error('message')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="text-center mt-5"><button type="submit" class="btn btn-info btn-lg">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Abhiram</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                Designed by <a href="https://theabhirambsjavalliproject.online/">Abhiram B S</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

</body>

</html>
