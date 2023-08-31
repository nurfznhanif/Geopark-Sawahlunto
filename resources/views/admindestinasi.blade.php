@extends('layout.mainAdmin')

@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Destinasi</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('searchDestinasi') }}" method="GET">
            <div class="row">
                <div class="col-4">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-8 d-flex justify-content-end mb-2">
                    <a href="{{ route('tambahDestinasi') }}" class="btn btn-primary" role="button">
                        <i class="fa fa-plus" aria-hidden="true"></i> </a></td>
                </div>
            </div>
        </form>
        @if (session('gagal'))
        <div class="alert alert-danger">
            <b> Oops! </b> {{ session('error') }}
        </div>
        @endif

        @if (session('berhasil'))
        <div class="alert alert-success">
            <b> Hooray! </b> {{ session('berhasil') }}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        {{-- <th scope="col">No</th> --}}
                        <th scope="col">Nama</th>
                        <th scope="col">Location</th>
                        <th scope="col">Description</th>
                        <th scope="col">Cover</th>
                        <th scope="col"> Image </th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($destinasi as $dest)
                    <tr>
                        {{-- <td>{{ $no++ }}</td> --}}
                        <td>{{ $dest->dest_name }}</td>
                        <td>{{ $dest->dest_location }}</td>
                        <td>{{ $dest->dest_desc }}</td>
                        <td>
                            <img src="{{ asset('cover/' . $dest->dest_cover) }}" alt="image" height="40px" width="40px" style="border-radius: 100%">
                        </td>
                        <td>
                            @foreach ($dest->photodests as $photo)
                            <img class="mb-2" src="{{ asset('destinasi/' . $photo->destphoto) }}" alt="image" height="40px" width="40px" style="border-radius: 100%">
                            @endforeach
                        </td>
                        <td>
                            <div>
                                <a href="{{ route('editDestinasi', [$dest->id]) }}" class="btn btn-outline-success" role="button"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="mt-2">
                                {{-- <form action=" {{ route('deleteDestinasi', [$dest->id]) }} ">
                                <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                @csrf
                                @method('delete')
                                </form> --}}

                                <a class="btn btn-outline-danger" href="{{ route('deleteDestinasi', [$dest->id]) }}" role="button" data-toggle="modal" data-target="#deleteModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>

                            {{-- Delete Modal --}}
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">
                                                Delete</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Apakah anda yakin ingin Delete?
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <form action=" {{ route('deleteDestinasi', [$dest->id]) }} ">
                                                <button class="btn btn-primary" type="submit">Delete</button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $destinasi->links('paginatecustom') }}
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->

@endsection