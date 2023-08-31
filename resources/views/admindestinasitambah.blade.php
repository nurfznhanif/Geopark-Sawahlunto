@extends('layout.mainAdmin')

@section('content')

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Destinasi</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="font-weight-bold text-primary">Tambah Destinasi</h6>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a class="btn-close btn-outline-primary" aria-label="close" href="{{ route('destinasi') }}" role="button"></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <form action="{{ route('storeDestinasi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group mb-3">
                        <label for="title">Nama Destinasi</label>
                        <input type="text" name="dest_name" id="title" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="title">Lokasi Destinasi</label>
                        <input type="text" name="dest_location" id="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="dest_desc" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="dest_desc" id="dest_desc" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Cover</label>
                        <input class="form-control" name="cover" type="file" id="formFile" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Input Gambar</label>
                        <input class="form-control" name="images[]" type="file" id="formFile" multiple required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- End of Content Wrapper -->

@endsection