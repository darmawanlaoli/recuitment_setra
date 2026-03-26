@extends('partials.layout')

@section('content')


<div class="lg:col-span-2">

    <div class="card">

        <table class="table">
            <tr>
                <th width="3px">No</th>
                <th>Nama Test</th>
                <th>Keterangan</th>
                <th>Durasi Pengerjaan</th>
                <th>Kerjakan</th>
            </tr>

            @foreach($test_types as $test_type)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $test_type->name }}</td>
                <td>{{ $test_type->description }}</td>
                <td>{{ $test_type->duration_minutes .' menit' }}</td>
                <td>
                    <a href="" onclick="alert('Fitur ini masih dalam pengerjaan')" class="btn btn-primary">Mulai</a>
                </td>
            </tr>

            @endforeach
        </table>

    </div>

</div>

@endsection