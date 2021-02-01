@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create Tracking') }}</div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <form action="{{route('tracking.store')}}" class="form-horizontal m-t-30" method="post">
                            @csrf
                            @livewireScripts
                            @livewire('tracking-data')
                            @livewireStyles
                            <div class="form-group">
                            <button type="submit" class="float-right btn btn-outline-primary">Simpan</button>
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
</div>
@endsection