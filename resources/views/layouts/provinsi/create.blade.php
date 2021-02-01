@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Provinsi') }}</div>
                <div class="card-body">
                <form  action="{{route('provinsi.store')}}" method="post">
                    @csrf
                      <div class="form-group">
                    <div class="mb-12>
                        <label for=""><b>Nama Provinsi</b></label>
                        <input type="text" class="form-control @error('nama_provinsi') is-invalid @enderror" name="nama_provinsi" value="{{ old('nama_provinsi') }}">
                        @error('nama_provinsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                     </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-outline-warning">Tambah</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
