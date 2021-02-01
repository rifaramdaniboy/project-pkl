@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Negara') }}</div>
                <div class="card-body">

                <form action="{{route('negara.update',$negara->id)}}" method="POST">
                    @csrf
                    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode negara</label>
    <input type="text" name="id" value="{{$negara->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama negara</label>
    <input type="text" name="nama_prov" value="{{$negara->nama_negara}}" class="form-control" id="exampleInputPassword1">
  </div>               
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection