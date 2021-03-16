@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tables</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Data Pegawai</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('cetakpegawai') }}" target="_blank" class="btn btn-sm btn-primary">Cetak
                                PDF</a>
                            <a href="{{ route('createpegawai') }}" class="btn btn-sm btn-primary">Add user</a>
                            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                        </div>
                    </div>
                </div>

                {{-- <div class="card-header border-0">
                    <h3 class="mb-0">Data Pegawai</h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('createpegawai') }}" class="btn btn-sm btn-primary">Tambah</a>
                <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> --}}
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="nama">No</th>
                            <th scope="col" class="sort" data-sort="nama">Nama</th>
                            <th scope="col" class="sort" data-sort="alamat">Alamat</th>
                            <th scope="col" class="sort" data-sort="tgllhr">Tanggal Lahir</th>
                            <th scope="col" class="sort" data-sort="tgllhr">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($dtPegawai as $key=> $item)
                    <tbody class="list">
                        <tr>
                            <th>{{ $dtPegawai->firstItem() +$key }}</th>
                            <th>{{ $item->nama }}</th>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ date('d-m-y',strtotime($item->tgllhr)) }}</td>
                            <td><a href="{{ url('editpegawai',$item->id) }}"><i class="fas fa-edit"></i></a> | <a
                                    href="{{ url('deletepegawai',$item->id) }}"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">

                <div class="justify-content-end">
                    Showing
                    {{ $dtPegawai->firstItem() }}
                    to
                    {{ $dtPegawai->lastItem() }}
                    of
                    {{ $dtPegawai->total() }}
                </div>
                <div class="pagination justify-content-end ">
                    {{ $dtPegawai->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@include('sweetalert::alert')

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush