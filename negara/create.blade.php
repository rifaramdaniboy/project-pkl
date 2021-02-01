@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Negara') }}</div>
                <div class="card-body">

                <form action="{{route('negara.store')}}" method="POST">
                    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode Negara</label>
    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Negara</label>
    <input type="text" name="nama_negara" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection