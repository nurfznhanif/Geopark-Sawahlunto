<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>GEOPARK SAWAHLUNTO</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="/assets/img/logosawahlunto.png">

    <!-- CSS
================================================== -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset('Template')}}/css/style.css">
    <!-- wa floating btn-->
    <link rel="stylesheet" href="{{asset('Template')}}/css/wabtn.css">
    <style>
        /* Tambahan Header */
        .nav-link {
            color: #ffffff;
        }

        .caption_overlay {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            top: 50%;
            color: white;
            z-index: 100;
        }

        .w-100 {
            width: 100%;
        }

        .animated-title {
            font-family: inherit;
            position: relative;
            height: 100px;
            width: 100%;
            text-align: center;
        }

        .caption_overlay_title {
            font-size: 70px;
            font-weight: bold;
        }

        .caption_overlay_subtitle {
            font-size: 35px;
            font-weight: bold;
        }

        .text-top {
            height: 45%;
        }

        .my-10 {
            margin-top: 6.25rem !important;
            margin-bottom: 6.25rem !important;
        }

        .container-shortcut {
            display: inline-block;
        }

        .group-shortcut {
            margin-right: 1.5em;
            margin-left: 1.5em;
        }

        .btn-shortcut {
            height: 100px;
            width: 100px;
            padding: 13px 7px;
            position: relative;
            color: white;
            text-decoration: none;
            border-radius: 120px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .testing {
            border: 2px solid green;
            background: red;
        }

        .padding-section {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .image {
            border-radius: 20px;
        }
    </style>


</head>

<body>
    <div class="body-inner">
        <!-- Header start -->
        <header id="header" class="header-two">
            <div class="site-navigation">
                <div class="row mr-4 ml-4">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">

                            <div class="logo">
                                <a class="d-block" href="/">
                                    <img loading="lazy" src="{{asset('Template')}}/images/logosawahlunto.png" alt="Constra">
                                </a>
                            </div><!-- logo end -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="navbar-collapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav ml-auto align-items-center">

                                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>

                                    <li class="nav-item"><a class="nav-link" href="/tentang">Tentang kami</a></li>

                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="/kajian">Kajian</a></li>
                                            <li><a href="/galeri">Galeri</a></li>
                                            <li><a href="/partnership">Our Partners</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--/ Col end -->
                </div>
                <!--/ Row end -->
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->

        @yield('content')


    </div>

    <footer id="footer" class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6 footer-widget footer-about">
                        <h3 class="widget-title">Tentang Kami</h3>
                        <img loading="lazy" width="200px" class="footer-logo" src="/assets/img/logosawahlunto.png" alt="Constra">
                        <p class="text-white">Geopark Sawahlunto merupakan salah satu Geopark yang terletak di Daerah Sumatera Barat, Indonesia.</p>
                        <a href="/tentang" class="text-white">Selengkapnya</a>
                        <br>
                        <hr>
                        <p class="text-white">Temukan kami:</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f text-white"></i></a></li>
                                <li><a href="#" aria-label="Youtube"><i class="fab fa-youtube text-white"></i></a>
                                </li>
                                <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram text-white"></i></a></li>
                            </ul>
                        </div><!-- Footer social end -->
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                        <h3 class="widget-title">Geoheritage</h3>
                        <div class="working-hours text-white">
                            Berdasarkan Peraturan Presiden Nomor 9 Tahun 2019 tentang Pengembangan Taman Bumi,
                            Geopark (Taman Bumi) adalah sebuah wilayah geografi tunggal atau gabungan,
                            yang memiliki Situs Warisan Geologi (Geosite) dan bentang alam yang bernilai,
                            terkait aspek Warisan Geologi (Geoheritage).
                        </div>
                    </div><!-- Col end -->


                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->

        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-info text-white text-center">
                            <span>Copyright &copy; <script>
                                    document.write(new Date().getFullYear())
                                </script>, GEOPARK SAWAHLUNTO</span>
                        </div>
                    </div>
                </div><!-- Row end -->

                <!-- <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                        <button class="btn btn-primary" title="Back to Top">
                            <i class="fa fa-angle-double-up"></i>
                        </button>
                    </div> -->

            </div><!-- Container end -->
        </div><!-- Copyright end -->
    </footer><!-- Footer end -->


    <!-- Javascript Files
  ================================================== -->
    <!-- <script type="text/javascript">
            window.onload = () => {
                $('#onload').modal('show');
            }
        </script> -->

    <!-- initialize jQuery Library -->
    <script src="{{asset('Template')}}/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{asset('Template')}}/plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="{{asset('Template')}}/plugins/slick/slick.min.js"></script>
    <script src="{{asset('Template')}}/plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="{{asset('Template')}}/plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="{{asset('Template')}}/plugins/shuffle/shuffle.min.js" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->



    <script src="{{asset('Template')}}/plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="{{asset('Template')}}/js/script.js"></script>

    <script src="https://apis.google.com/js/platform.js"></script>

    </div><!-- Body inner end -->
</body>

</html>