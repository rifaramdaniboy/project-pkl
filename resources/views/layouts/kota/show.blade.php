@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kota') }}</div>

                <div class="card-body">
                     <div class="form-group">
                        <label for="">Provinsi</label>
                        <input type="text" name="id_provinsi" class="form-control" value="{{$kota->provinsi->nama_provinsi}}" readonly>
                    </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1 class="form-label"><b>Nama Kota</b></label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama_kota"
                        value="{{$kota->nama_kota}}" readonly>
                       </div>
                     </div>
                     <a class="btn btn-outline-warning" href="{{ route('kota.index') }}">Kembali</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
