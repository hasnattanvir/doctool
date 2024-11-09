@extends('dashboard.admins.layouts.admin-dash-layout')

@section('title', 'Patient Data')

{{-- this is for laravel defulat --}}
@section('content')
<div class="container">
    <h2>Patient List</h2>
    <table class="table table-bordered" id="patients-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Type of Disease</th>
                <th>Doctor</th>
                <th>Payment</th>
                <th>Due Payment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->type_of_disease }}</td>
                    <td>{{ $patient->doctor_name }}</td>
                    <td>{{ $patient->payment }}</td>
                    <td>{{ $patient->due_payment }}</td>
                    <td>
                        <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="javascript:void(0)" data-id="{{ $patient->id }}" class="btn btn-danger btn-sm delete-patient">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@push('scripts')
<script>
    $(document).ready(function() {
        $('#patients-table').DataTable(); // Enable DataTable features without server-side processing
    });
</script>
    
@endpush
