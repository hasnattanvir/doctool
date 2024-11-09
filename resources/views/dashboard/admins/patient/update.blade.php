@extends('dashboard.admins.layouts.admin-dash-layout')

@section('content')
    <div class="container">
        <h2>Edit Patient Information</h2>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Patient Form -->
        <form action="{{ route('patients.update', $patient->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $patient->name }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $patient->phone }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $patient->email }}">
            </div>

            <div class="form-group">
                <label for="type_of_disease">Type of Disease</label>
                <input type="text" name="type_of_disease" class="form-control" value="{{ $patient->type_of_disease }}">
            </div>

            <div class="form-group">
                <label for="payment">Payment</label>
                <input type="number" name="payment" class="form-control" step="0.01" value="{{ $patient->payment }}">
            </div>

            <div class="form-group">
                <label for="due_payment">Due Payment</label>
                <input type="number" name="due_payment" class="form-control" step="0.01" value="{{ $patient->due_payment }}">
            </div>

            <div class="form-group">
                <label for="total_payment">Total Payment</label>
                <input type="number" name="total_payment" class="form-control" step="0.01" value="{{ $patient->total_payment }}">
            </div>

            <div class="form-group">
                <label for="doctor_fee">Doctor Fee</label>
                <input type="number" name="doctor_fee" class="form-control" step="0.01" value="{{ $patient->doctor_fee }}">
            </div>

            <div class="form-group">
                <label for="case_details">Case Details</label>
                <textarea name="case_details" class="form-control">{{ $patient->case_details }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
                @if($patient->image)
                    <img src="{{ asset('storage/' . $patient->image) }}" alt="Patient Image" width="100">
                @endif
            </div>

            <div class="form-group">
                <label for="next_schedule_date">Next Schedule Date</label>
                <input type="date" name="next_schedule_date" class="form-control" value="{{ $patient->next_schedule_date }}">
            </div>

            <div class="form-group">
                <label for="doctor_name">Doctor Name</label>
                <input type="text" name="doctor_name" class="form-control" value="{{ $patient->doctor_name }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Patient</button>
        </form>
    </div>
@endsection
