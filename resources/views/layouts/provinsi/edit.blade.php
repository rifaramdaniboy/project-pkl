@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Provinsi') }}</div>

                <div class="card-body">
                <form  action="{{route('provinsi.update', $provinsi->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                    @csrf
                      <div class="form-group">
                    <div class="mb-12>
                        <label class="form-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" class="form-control @error('nama_provinsi') is-invalid @enderror"
                        value="{{ old('nama_provinsi', $provinsi->nama_provinsi) }}">
                        @error('nama_provinsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                     </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">Submit</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
