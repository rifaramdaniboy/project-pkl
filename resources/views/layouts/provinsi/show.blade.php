@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Provinsi') }}</div>

                <div class="card-body">
                      <div class="form-group">
                    <div class="mb-12>
                        <label class="form-label">Provinsi</label>
                        <input type="text" class="form-control" name="nm_prov"
                        value="{{$provinsi->nama_provinsi}}" readonly>
                         </div>
                      </div>
                      <a class="btn btn-outline-warning" href="{{ route('provinsi.index') }}">Kembali</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
