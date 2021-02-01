@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Negara') }}</div>
                <div class="card-body">

                <form action="{{route('negara.show',$negara->id)}}" method="POST">
                @csrf
                    @method('PUT')
  <div class="mb-3">
    <label>Kode Negara</label>
    <input type="text" name="id" value="{{$negara->id}}" class="form-control" readonly>
  </div>
  <div class="mb-3">
    <label>Nama Negara</label>
    <input type="text" name="nama_negara" value="{{$negara->nama_negara}}" class="form-control" readonly>
  </div>
  <button type="submit" class="btn btn-primary">Kembali</button>
</form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection