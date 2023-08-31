@extends('layout.main')

@section('content')
<section id="project-area" class="project-area">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">GEOPARK SAWAHLUNTO</h2>
                <h3 class="section-sub-title" style="color: green;">Destinasi</h3>
            </div>
        </div>
    </div>
</section>

<div class="container text-center">
    <div class="row">
        @foreach ($destinasi as $dest)
        <div class="col-md-12 col-lg-4">
            <a href="{{ route('detailDestinasi', [$dest->id]) }}" style="text-decoration: none; ">
                <div class="mb-2 mt-3 img-rounded-hover-effect">
                    <img src="{{ asset('cover/' . $dest->dest_cover) }}" alt="Destinasi" class="img-fluid">
                </div>
                <hr class="mt-2 mb-2 badge-primary" style="border: 1.5px solid
                                        #6868ac; border-radius: 5px" />
                <div>
                    <h5 class='font-weight-bold' style="color: black"> {{ $dest->dest_name }} </h5>
                    <h6 style="color: black">
                        <i class="fa fa-fw
                                                fa-map-marker-alt"></i>
                        {{ $dest->dest_location }}
                    </h6>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    {{$destinasi->links('paginatedest')}}
</div>

@endsection