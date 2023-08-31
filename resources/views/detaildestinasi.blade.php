@extends('layout.main')

@section('content')

<div class="container">
    <!-- Judul -->
    <section class="judul mt-5 mb-5">
        <div class="text-center">
            <h2 class="text-uppercase font-weight-bold mb-4"> {{ $destinasi->dest_name }} </h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('cover/' . $destinasi->dest_cover) }}" style="border-radius: 10px;" class="d-block w-100" alt="Gambar" height="600px">
                        </div>
                        @foreach ($destinasi->photodests as $photo)
                        <div class="carousel-item">
                            <img src="{{ asset('destinasi/' . $photo->destphoto) }}" style="border-radius: 10px;" class="d-block w-100" alt="Gambar" height="600px">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="description mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="font-weight-bold">
                    {{ $destinasi->dest_name }}
                </h3>
                <div class="meta-post-sm mb-4">
                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                        <li class="me-4 mb-1">
                            <i class="fa fa-map-marker-alt font-weight-bold" aria-hidden="true"></i>
                            <span style="color: black;" class="font-weight-bold hover-text-primary">
                                {{ $destinasi->dest_location }}
                            </span>
                        </li>
                    </ul>
                </div>
                <div style="margin: 0; text-indent: 2rem; text-align: justify; font-size: 15px;" class="mb-5" id="content">
                    {{ $destinasi->dest_desc }}
                </div>
    </section>
</div>

@endsection