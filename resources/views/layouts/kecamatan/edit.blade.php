@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kecamatan') }}</div>

                <div class="card-body">
                <form  action="{{route('kecamatan.update', $kecamatan->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                    @csrf
                     <div class="form-group">
                        <label for="">Kota</label>
                        <select name="id_kota" class="form-control" required>
                            @foreach($kota as $data)
                            <option value="{{$data->id}}"
                                {{$data->id == $kecamatan->id_kota ? "selected":""}}>{{$data->nama_kota}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                    <div class="mb-12>
                        <label for="" class="form-label"><b>Kode Kecamatan</b></label>
                        <input type="number" class="form-control @error('kode_kecamatan') is-invalid @enderror" name="kode_kecamatan"
                        value="{{ old('kode_kecamatan', $kecamatan->kode_kecamatan) }}">
                        @error('kode_kecamatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                     </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="" class="form-label"><b>Nama Kecamatan</b></label>
                        <input type="text" class="form-control @error('nama_kecamatan') is-invalid @enderror" name="nama_kecamatan"
                        value="{{ old('nama_kecamatan', $kecamatan->nama_kecamatan) }}">
                        @error('nama_kecamatan')
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
