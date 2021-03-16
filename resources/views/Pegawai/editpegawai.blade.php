@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt-4 pb-6">
    <div class="row">
        <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <h3 class="mb-0">{{ __('Edit Data Pegawai') }}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('updatepegawai',$peg->id) }}" autocomplete="off">
                        {{ csrf_field () }}
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Nama') }}</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="{{ __('Masukan Nama Pegawai') }}" value="{{ $peg->nama }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Alamat') }}</label>
                                <textarea name="alamat" id="alamat" class="form-control"
                                    placeholder="{{ __('Masukan Alamat Pegawai') }}">{{ $peg->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Tanggal Lahir') }}</label>
                                <input type="date" name="tgllhr" id="tgllhr" class="form-control"
                                    value="{{ $peg->tgllhr }}">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Edit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection