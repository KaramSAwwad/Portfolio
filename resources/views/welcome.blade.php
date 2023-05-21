<!DOCTYPE html>
<html lang="en" itemscope>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <title>
        {{ __('messages.title') }}
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->


    <link id="pagestyle" href="{{asset('assets/css/material-kit.css')}}" rel="stylesheet"/>


    @if( app()->getLocale() =="fa" )
        <style>
            * {

                font-family: Nazanin, sans-serif;
            }

            h2, h3, input {
                font-family: Nazanin, sans-serif !important;
            }
        </style>
        <link rel="preconnect" href="//fdn.fontcdn.ir">
        <link rel="preconnect" href="//v1.fontapi.ir">
        <link href="https://v1.fontapi.ir/css/Nazanin" rel="stylesheet">
    @endif

    @if( app()->getLocale() =="ar" )
        <style>
            * {
                font-family: 'El Messiri', sans-serif;
            }

            h2, h3, input {
                font-family: 'El Messiri', sans-serif !important;
            }
        </style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
    @endif

    @if(app()->getLocale() =="ar" or app()->getLocale() =="fa"  )

        <link id="pagestyle" href="{{asset('assets/css/material-kit-ar.css')}}" rel="stylesheet"/>
    @endif

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@master/devicon.min.css">
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">--}}
    {{--    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>--}}

</head>

<body class="blog-author bg-gray-200">
<!-- Navbar Transparent -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
        <h1 class="navbar-brand  text-white " data-placement="bottom">
            Portfolio
        </h1>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
        </button>

        <div class="navbar-collapse w-100 pb-2 py-lg-0 ms-lg-12 text-center collapse" id="navigation">
            <ul class="d-block d-lg-none d-md-none mb-0  list-unstyled">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a class="dropdown-item border-radius-md" rel="alternate" hreflang="{{ $localeCode }}"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="d-none d-lg-block navbar-nav navbar-nav-hover ms-auto">
                <div class="dropdown">
                    <button class="btn bg-gradient-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('messages.language') }}
                    </button>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton" style="text-align: center;">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item border-radius-md" rel="alternate" hreflang="{{ $localeCode }}"
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </ul>

        </div>
    </div>
</nav>
<!-- End Navbar -->
<!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
<header>
    <div class="page-header min-height-400" style="background-image: url('../assets/img/city-profile.jpg');"
         loading="lazy">
        <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
</header>
<!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="mt-n8 mt-md-n9 text-center">
                <img class="avatar avatar-3xl shadow-xl position-relative z-index-2"
                     src="{{asset('assets/img/Karam.jpg')}}" alt="bruce" loading="lazy">
            </div>
            <div class="row py-5">
                <div class="col-12 z-index-2 position-relative py-md-4 py-lg-4 px-lg-10 px-md-10  py-1 px-1 ">
                    <div class="d-flex justify-content-between align-items-center mb-2 ar-flex-row-reverse">
                        <h3 class="mb-0">{{ __('messages.title') }}</h3>
                        <div class="d-block">
                            <form action="{{route('download.my.cv')}}" method="get">
                                <button type="submit" class="btn btn-sm btn-outline-info text-nowrap mb-0">
                                    {{ __('messages.Download CV') }}
                                </button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <p class="text-lg mb-0">
                        {{ __('messages.about') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Testimonials w/ user image & text & info -->
    <!-- START Blogs w/ 4 cards w/ image & text & link -->
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h3 class="mb-5">{{trans('messages.Skills')}}</h3>
        </div>
    </div>
    <div class="row col-12 flex-row-reverse">
        <div class="row my-2 justify-content-evenly">
            <div class="col-12 col-lg-3 my-2 my-lg-0 my-md-0 col-md-3  card p-3">
                <div
                    class="d-flex mx-0 justify-content-around justify-content-lg-unset justify-content-md-unset mx-lg-auto mx-md-auto">
                    <span class="text-lg mx-4 text-primary">PHP</span>
                    <i id="skills" class="mx-4 devicon-php-plain colored"> </i>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-2 my-lg-0 my-md-0 col-md-3  card p-3">
                <div
                    class="d-flex mx-0 justify-content-around justify-content-lg-unset justify-content-md-unset mx-lg-auto mx-md-auto">
                    <span class="text-lg mx-4 text-primary">Laravel</span>
                    <i id="skills" class="mx-4 devicon-laravel-plain-wordmark colored"> </i>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-2 my-lg-0 my-md-0 col-md-3  card p-3">
                <div
                    class="d-flex mx-0 justify-content-around justify-content-lg-unset justify-content-md-unset mx-lg-auto mx-md-auto">
                    <span class="text-lg mx-4 text-primary">HTML5</span>
                    <i id="skills" class="mx-4 devicon-html5-plain-wordmark"> </i>
                </div>
            </div>
        </div>

        <div class="row my-0 my-lg-4 my-md-4 justify-content-evenly">
            <div class="col-12 col-lg-3 my-2 my-lg-0 my-md-0 col-md-3  card p-3">
                <div
                    class="d-flex mx-0 justify-content-around justify-content-lg-unset justify-content-md-unset mx-lg-auto mx-md-auto">
                    <span class="text-lg mx-4 text-primary">MySql</span>
                    <i id="skills" class="mx-4 devicon-mysql-plain colored"> </i>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-2 my-lg-0 my-md-0 col-md-3  card p-3">
                <div
                    class="d-flex mx-0 justify-content-around justify-content-lg-unset justify-content-md-unset mx-lg-auto mx-md-auto">
                    <span class="text-lg mx-4 text-primary">CSS</span>
                    <i id="skills" class="mx-4 devicon-css3-plain colored"> </i>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-2 my-lg-0 my-md-0 col-md-3  card p-3">
                <div
                    class="d-flex mx-0 justify-content-around justify-content-lg-unset justify-content-md-unset mx-lg-auto mx-md-auto">
                    <span class="text-lg mx-4 text-primary">Bootstrab</span>
                    <i id="skills" class="mx-4 devicon-bootstrap-plain colored"> </i>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center mt-5 mb-0">
        <div class="col-md-auto">
            <h3 class="mb-5">{{ __('messages.Offer') }}</h3>
        </div>
    </div>
    <div class="row px-md-7 px-lg-7 px-0">

        <div class="col-lg-3 col-sm-6">
            <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image">
                        <img src="../assets/img/first.jpg" alt="img-blur-shadow"
                             class="img-fluid shadow border-radius-lg" loading="lazy">
                    </a>
                </div>
                <div class="card-body px-0">
                    <h5>
                        {{ __('messages.CustomWebDevelopment') }}
                    </h5>
                    <p>
                        {{ __('messages.CustomWebDevelopmentAbout') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image">
                        <img src="../assets/img/second.jpg" alt="img-blur-shadow"
                             class="img-fluid shadow border-radius-lg" loading="lazy">
                    </a>
                </div>
                <div class="card-body px-0">
                    <h5>
                        {{ __('messages.optimization') }}
                    </h5>
                    <p>
                        {{ __('messages.optimizationAbout') }}
                    </p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image">
                        <img src="../assets/img/third.jpg" alt="img-blur-shadow"
                             class="img-fluid shadow border-radius-lg" loading="lazy">
                    </a>
                </div>
                <div class="card-body px-0">
                    <h5>
                        {{ __('messages.DatabaseManagement') }}
                    </h5>
                    <p>
                        {{ __('messages.DatabaseManagementAbout') }}
                    </p>

                </div>
            </div>
        </div>

    </div>
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
</div>

<section class="py-lg-5" style="margin-bottom: 0px!important; padding-bottom: 0px!important;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card box-shadow-xl overflow-hidden mb-5">
                    <div class="row">
                        <div class="col-lg-5 position-relative bg-cover px-0"
                             style="background-image: url('../assets/img/blog2.jpg')">
                            <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                                <div class="mask bg-gradient-dark opacity-8"></div>
                                <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                                    <h3 class="text-white">{{ __('messages.Information') }}</h3>
                                    <p class="text-white opacity-8 mb-4">{{ __('messages.fill') }}</p>
                                    <div class="d-flex p-2 text-white ar-flex-row-reverse">
                                        <div>
                                            <i class="fas fa-phone text-sm"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-sm opacity-8">(+98) 903 4793 194</span>
                                        </div>
                                    </div>
                                    <div class="d-flex p-2 text-white ar-flex-row-reverse">
                                        <div>
                                            <i class="fas fa-envelope text-sm"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-sm opacity-8">Karam.s.awwad@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="mt-4 ar-text-align-center">
                                        <a href="https://github.com/KaramSAwwad" target="_blank">
                                            <button type="button"
                                                    class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    data-original-title="Go to my GitHub account">
                                                <i class="fab fa-github"></i>
                                            </button>
                                        </a>
                                        <a href="https://www.linkedin.com/in/karam-awwad-083a89233/" target="_blank">
                                            <button type="button"
                                                    class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    data-original-title="Go to my LinkedIn account">
                                                <i class="fab fa-linkedin"></i>
                                            </button>
                                        </a>
                                        <a href="https://web.whatsapp.com/send?phone=+989034793194" target="_blank"
                                           rel="nofollow">
                                            <button type="button"
                                                    class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    data-original-title="Send message on WhatsApp">
                                                <i class="fab fa-whatsapp fa-lg"></i>
                                            </button>
                                        </a>

                                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                                data-toggle="tooltip" data-placement="bottom"
                                                data-original-title="Telegram"
                                                onclick="window.open('https://t.me/Karam1SY')">
                                            <i class="fab fa-telegram"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            @if($errors->has('name'))

                                <div class="alert alert-danger alert-dismissible fade show ar-alert " role="alert">
                                    <span class="alert-text"><strong>{{trans('messages.Error!')}}</strong>{{trans('messages.'. $errors->first('name') )}} </span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                </div>
                            @endif
                            @if($errors->has('message'))

                                <div class="alert alert-danger alert-dismissible fade show ar-alert" role="alert">
                                    <span class="alert-text"><strong>{{trans('messages.Error!')}}</strong> {{trans('messages.'. $errors->first('message') )}} </span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                </div>
                            @endif
                            <form class="p-3" id="contact-form" method="post" action="{{ route('send-email') }}">
                                @csrf
                                <div class="card-header px-4 py-sm-5 py-3">
                                    <h2>{{ __('messages.Hi!') }}</h2>
                                    <p class="lead">{{ __('messages.talk') }}</p>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="row">
                                        <div class="col-md-12 pe-2 mb-3">
                                            <div class="input-group input-group-static mb-4 ar-flex-row-reverse">
                                                <label>{{ __('messages.name') }}</label>
                                                <input type="text" min="3" class="form-control" name="name"
                                                       placeholder="{{ __('messages.placeholdername') }}" required>
                                            </div>
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <div class="input-group input-group-static mb-4 ar-flex-row-reverse">
                                                <label>{{ __('messages.message') }}</label>
                                                <textarea name="message" minlength="3"
                                                          class="form-control ar-flex-row-reverse"
                                                          id="message" rows="2"
                                                          placeholder="{{ __('messages.placeholdermessege') }}"
                                                          required></textarea>
                                            </div>
                                            @error('message')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-end ar-text-start ms-auto">
                                            <button type="submit"
                                                    class="btn bg-gradient-info mb-0">{{ __('messages.SendMessage') }}</button>
                                        </div>
                                    </div>
                                    @if(session('success'))
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success!',
                                                text: '{{ session('success') }}'
                                            });
                                        </script>
                                    @endif

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->
<footer class="footer py-5" style="margin-top: 0px!important;
    padding: 0px!important;">
    <div class="container z-index-1 position-relative">
        <p class="text-sm text-dark opacity-8 mb-0">
            {{--            <script>--}}
            {{--                document.write(new Date().getFullYear())--}}
            {{--            </script>--}}
            by Karam Awwad.
        </p>
    </div>
</footer>
<!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
<!--   Core JS Files   -->
@include('sweetalert::alert')

<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/parallax.min.js')}}"></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-kit.min.js?v=3.0.4')}}" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</body>

</html>
