@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Tracking') }}</div>  
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <form action="{{route('tracking.update', $tracking->id)}}" class="form-horizontal m-t-30" method="post">
                            @csrf
                            @method('put')
                            @livewire('tracking-data',['selectedRw' => $tracking->id_rw, 'idt' => $tracking->id])
                            <div class="form-group">
                            <button type="submit" class="float-right btn btn-outline-primary">Edit</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection