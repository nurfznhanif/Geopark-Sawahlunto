@extends('layout.main')

@section('content')

@php
$bg = asset('Template');
@endphp

<section class="hero">
    <div class="caption_overlay text-center w-100" style="margin-top: 250px;">
        <div class="text-top">
            <h1 class="caption_overlay_title mt-0 text-success">
                GEOPARK SAWAHLUNTO
            </h1>
        </div>
        <div class="text-bottom">
            <div class="content">
                <h2 class="mb-0 caption_overlay_subtitle">
                    You will love every corner of it
                </h2>
                <div class="mt-3">
                    <h5>
                        Let's explore the city in Indonesia with famous name called the City of Charcoal.
                    </h5>
                </div>
            </div>
        </div>
        <div class="my-10">
        </div>
        <div class="mt-9 container-shortcut">
            <div class="d-flex">
                <div class="text-center group-shortcut">
                    <a href="/dest" class="btn-shortcut btn-beat-radial">
                        <div class="d-block w-100">
                            <i class="fa fa-fw fa-map-marked-alt fa-3x"></i>
                        </div>
                        <div class="d-block w-100">
                            <span>
                                Destinasi
                            </span>
                        </div>
                    </a>
                </div>
                <div class="text-center group-shortcut">
                    <a href="/artikel" class="btn-shortcut btn-beat-radial">
                        <div class="d-block w-100">
                            <i class="fa fa-fw fa-bullhorn fa-3x"></i>
                        </div>
                        <div class="d-block w-100">
                            <span>
                                Informasi
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video -->
<div class="bg-overlay-dark fullwidthbanner-container">
    <video class="w-100 video-front" autoplay muted loop id="myVideo" style="height: 100vh; object-fit: cover; margin-top: -150px;">
        <source src="../assets/video/sawahlunto.mp4" type="video/mp4">
    </video>
</div>


<!-- Isi Content -->
<section class="padding-section">
    <div class="tittle text-center">
        <img src="assets/img/icon-index/icon-sign.png" alt="journey" height="100px" width="100px">
        <h1 class="font-weight-bold mt-2" style="font-size: 60px; color: #198754 !important;">
            Start Your Best <br />
            Journey In Sawahlunto
        </h1>
    </div>
</section>
<!-- End Content -->

@endsection