<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Salon Fransisco</title>
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />

    <!--Core CSS -->
    <link rel="stylesheet" href="/assets/css/app.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" />
</head>

<body>
    <div id="huro-app" class="app-wrapper">
        <!--Full pageloader-->
        <!-- Pageloader -->
        <div class="pageloader is-full"></div>
        <div class="infraloader is-full is-active"></div>
        <div class="minimal-wrapper light">
            <!--Page body-->

            <div class="landing-page-wrapper">
                <!-- Hero and Navbar -->
                <div id="huro-landing" class="hero is-fullheight rounded-hero">

                    <!-- Navbar partial -->
                    <nav class="navbar is-fixed-top is-transparent is-docked" aria-label="main navigation">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="">
                                <div class="brand-icon">
                                    <img class="light-image-l" src="/assets/img/logos/logo/logo.svg" alt="" />
                                    <img class="dark-image-l" src="/assets/img/logos/logo/logo-light.svg"
                                        alt="" />
                                </div>
                            </a>

                            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false">
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                            </a>
                        </div>

                        <div class="navbar-menu">
                            <div class="navbar-start">
                                <div class="navbar-item">
                                    <a href="" class="nav-link is-active">Dashboards</a>
                                </div>

                                @if (Auth::user()->role == 'admin')
                                    <div class="navbar-item">
                                        <a href="" class="nav-link is-scroll">Tambah User</a>
                                    </div>
                                    <div class="navbar-item">
                                        <a href="" class="nav-link is-scroll">Daftar User</a>
                                    </div>
                                @endif
                                @if (Auth::user()->role == 'kasir')
                                    <div class="navbar-item">
                                        <a href="" class="nav-link is-scroll">Kasir</a>
                                    </div>
                                    <div class="navbar-item">
                                        <a href="" class="nav-link is-scroll">Jasa</a>
                                    </div>

                                    <div class="navbar-item">
                                        <a href="" class="nav-link">Laporan</a>
                                    </div>
                                @endif
                                <!-- <div class="navbar-item">
                                    <a href="https://docs.cssninja.io/huro/" class="nav-link">Laporan</a>
                                </div> -->

                                <!-- <div class="navbar-item">
                                    <a href="https://support.cssninja.io" class="nav-link">Support</a>
                                </div> -->
                            </div>

                            <div class="navbar-end">
                                <div class="navbar-item is-theme-toggle">
                                    <label class="theme-toggle">
                                        <input id="navbar-night-toggle--daynight" type="checkbox">
                                        <span class="toggler">
                                            <span class="dark">
                                                <i data-feather="moon"></i>
                                            </span>
                                            <span class="light">
                                                <i data-feather="sun"></i>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <!-- <div class="navbar-item">
                                    <a href="/auth-login.html" class="nav-link">Login</a>
                                </div> -->
                                <div class="navbar-item">
                                    <a class="button h-button is-rounded is-primary is-raised"href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        <strong>Log Out</strong>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- <div class="absolute-header">
                        <div class="header-inner">
                            <img class="cut-circle light-image-l" src="/assets/img/shapes/cut-circle.svg" alt="">
                            <img class="cut-circle dark-image-l" src="/assets/img/shapes/cut-circle-dark.svg" alt="">
                        </div>
                    </div> -->

                    <div class="wizard-v1-wrapper">

                        <div id="wizard-step-0" class="inner-wrapper is-active" data-step-title="Project Type">
                            <!--src/partials/pages/wizard/wizard-v1/-->
                            <div class="step-content">

                                <div class="step-title">
                                    <h2 class="dark-inverted"></h2>
                                </div>

                                <div class="wizard-types">
                                    <div class="columns ">
                                        @if (Auth::user()->role == 'admin')
                                            <div class="column is-6">
                                                <div class="wizard-card">
                                                    <img src="/assets/img/illustrations/wizard/type-1.svg"
                                                        alt="" />
                                                    <h3 class="dark-inverted">Tambah User</h3>
                                                    <p></p>
                                                    <div class="button-wrap">
                                                        <a href="#"
                                                            class="button h-button is-primary is-rounded is-elevated is-bold type-select-button">Lanjut</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="column is-6">
                                                <div class="wizard-card">
                                                    <img src="/assets/img/illustrations/wizard/type-2.svg"
                                                        alt="" />
                                                    <h3 class="dark-inverted">Daftar User</h3>
                                                    <p></p>
                                                    <div class="button-wrap">
                                                        <a href="#"
                                                            class="button h-button is-primary is-rounded is-elevated is-bold type-select-button">Lanjut</a>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif



                                        @if (Auth::user()->role == 'kasir')
                                            <div class="column is-4">
                                                <div class="wizard-card">
                                                    <img src="/assets/img/illustrations/wizard/type-1.svg"
                                                        alt="" />
                                                    <h3 class="dark-inverted">Kasir</h3>
                                                    <p></p>
                                                    <div class="button-wrap">
                                                        <a href="#"
                                                            class="button h-button is-primary is-rounded is-elevated is-bold type-select-button">Lanjut</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="column is-4">
                                                <div class="wizard-card">
                                                    <img src="/assets/img/illustrations/wizard/type-2.svg"
                                                        alt="" />
                                                    <h3 class="dark-inverted">Jasa</h3>
                                                    <p></p>
                                                    <div class="button-wrap">
                                                        <a href="#"
                                                            class="button h-button is-primary is-rounded is-elevated is-bold type-select-button">Lanjut</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="column is-4">
                                                <div class="wizard-card">
                                                    <img src="/assets/img/illustrations/wizard/type-3.svg"
                                                        alt="" />
                                                    <h3 class="dark-inverted">Laporan</h3>
                                                    <p></p>
                                                    <div class="button-wrap">
                                                        <a href="#"
                                                            class="button h-button is-primary is-rounded is-elevated is-bold type-select-button">Lanjut</a>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif

                                        <!-- <div class="column is-3"></div>
                                        <div class="column is-6">
                                            <div class="wizard-card">
                                                <img src="/assets/img/illustrations/wizard/type-3.svg" alt="" />
                                                <h3 class="dark-inverted">Laporan</h3>
                                                <p></p>
                                                <div class="button-wrap">
                                                    <a href="#" class="button h-button is-primary is-rounded is-elevated is-bold type-select-button">Lanjut</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="column is-3"></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <canvas id="demo-canvas"></canvas> -->
                </div>

                <!--Stacks Section-->


            </div>

            <!--Huro Scripts-->
            <!--Load Mapbox-->

            <!-- Concatenated plugins -->
            <script src="/assets/js/app.js"></script>

            <!-- Huro js -->
            <script src="/assets/js/functions.js"></script>
            <script src="/assets/js/main.js" async></script>
            <script src="/assets/js/components.js" async></script>
            <script src="/assets/js/popover.js" async></script>
            <script src="/assets/js/widgets.js" async></script>


            <!-- Additional Features -->
            <script src="/assets/js/touch.js" async></script>

            <!-- Landing page js -->
            <script src="/assets/js/landing.js" async></script>

            <!-- Dashboards js -->

















            <!-- Charts js -->



            <!--Forms-->

            <!--Wizard-->

            <!-- Layouts js -->











            <script src="/assets/js/syntax.js" async></script>
        </div>
</body>

</html>
