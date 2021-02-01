@extends('layouts/master')

@section('content')
    <table class="table">
        <thead class="thead-dark">

        <a href="{{route('negara.create')}}" class="btn-outline-success float-right"><b>Add Data</b></a>
        <table class="table">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Negara</th>
            <th scope="col">Negara</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Action</th>
        </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($negara as $data)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_negara}}</td>
                <td>
                <form action="{{ route('negara.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                    <a href="{{ route('negara.edit', $data->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('negara.show', $data->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
                    <button type="submit"  class="btn btn-danger btn-sm" onclick="return confirm('Apakah Data Ini Akan Dihapuus?')"><i class="fa fa-trash-alt">
                </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection