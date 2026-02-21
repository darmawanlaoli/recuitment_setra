@extends('partials.layout')

@section('content')

@foreach($applicants as $applicant)
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $applicant->name }}</h5>
        <p class="card-text">Email: {{ $applicant->email }}</p>
        <p class="card-text">Phone: {{ $applicant->phone }}</p>
        <!-- Add more applicant details as needed -->
    </div>
</div>
@endforeach

@endsection