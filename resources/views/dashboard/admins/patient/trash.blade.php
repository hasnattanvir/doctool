@extends('dashboard.admins.layouts.admin-dash-layout')

@section('content')
<div class="container">
    <h2>Trashed Patients</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered" id="trashed-patients-table">
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
            
            @foreach($trashedPatients as $patient)
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
                       <!-- Restore Button within a form to send a POST request -->
                        <form action="{{ route('patients.restore', $patient->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Restore</button>
                        </form>

                        <!-- Permanently Delete Button within a form to send a DELETE request -->
                        <form action="{{ route('patients.forceDelete', $patient->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE') <!-- This is important to simulate a DELETE request -->
                            <button type="submit" class="btn btn-danger btn-sm">Delete Permanently</button>
                        </form>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<script>
    $(document).ready(function() {
        $('#trashed-patients-table').DataTable(); // Enable DataTable for trashed patients
    });
</script>

