@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kota') }}</div>

                <div class="card-body">
                <form  action="{{route('kota.store')}}" method="post">
                    @csrf
                     <div class="form-group">
                        <label for="">Provinsi</label>
                        <select name="id_provinsi" class="form-control" required>
                            @foreach($provinsi as $data)
                                <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label class="form-label"><b>Nama Kota</b></label>
                        <input type="text" class="form-control @error('nama_kota') is-invalid @enderror" name="nama_kota"
                         value="{{ old('nama_kota') }}">
                        @error('nama_kota')
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
