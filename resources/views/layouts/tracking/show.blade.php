@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Tracking') }}</div>

                <div class="card-body">
                    <form  action="{{route('tracking.index', $tracking->id)}}" method="post">
                        <input type="hidden" name="_method" value="GET">
                            @csrf
                            @method('GET')
                            @livewire('tracking-data',['selectedRw' => $tracking->id_rw, 'idt' => $tracking->id])
                            <div class="form-group">
                            <button type="submit" class="float-right btn btn-outline-primary">Kembali</button>
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