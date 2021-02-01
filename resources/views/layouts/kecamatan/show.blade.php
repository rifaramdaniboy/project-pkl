@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kecamatan') }}</div>

                <div class="card-body">
                     <div class="form-group">
                        <label for="">Kota</label>
                        <input type="text" name="id_kota" class="form-control" value="{{$kecamatan->kota->nama_kota}}" readonly>
                    </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="" class="form-label"><b>Kode Kecamatan</b></label>
                        <input type="number" class="form-control" name="kode_kecamatan"
                        value="{{$kecamatan->kode_kecamatan}}" readonly>
                        </div>
                     </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="" class="form-label"><b>Nama Kecamatan</b></label>
                        <input type="text" class="form-control" name="nama_kecamatan"
                        value="{{$kecamatan->nama_kecamatan}}" readonly>
                        </div>
                     </div>
                     <a class="btn btn-outline-warning" href="{{ route('kecamatan.index') }}">Kembali</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
