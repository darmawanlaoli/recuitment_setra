@extends('partials.layout')

@section('content')

@foreach($applications as $applicant)
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $applicant->name }}</h5>
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>: {{ $applicant->name }}</td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>: {{ $applicant->tanggal_lahir }}</td>
            </tr>

            <tr>
                <td>Status Perkawinan</td>
                <td>: {{ $applicant->status_perkawinan }}</td>
            </tr>

            <tr>
                <td>Jenis SIM</td>
                <td>: {{ $applicant->jenis_sim }}</td>
            </tr>

            <tr>
                <td>Tanggal Berlaku SIM</td>
                <td>: {{ $applicant->tanggal_berlaku_sim }}</td>
            </tr>

            <tr>
                <td>SIM Sebelumnya</td>
                <td>: {{ $applicant->jenis_sim_sebelumnya }}</td>
            </tr>

            <tr>
                <td>Provinsi</td>
                <td>: {{ $applicant->nama_provinsi }}</td>
            </tr>

            <tr>
                <td>Kabupaten</td>
                <td>: {{ $applicant->nama_kabupaten }}</td>
            </tr>

            <tr>
                <td>Posisi</td>
                <td>: {{ $applicant->nama_jabatan }}</td>
            </tr>

            <tr>
                <td>Area</td>
                <td>: {{ $applicant->nama_area }}</td>
            </tr>



        </table>

        <!-- Add more applicant details as needed -->
    </div>
</div>
@endforeach

@endsection