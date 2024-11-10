@extends('dashboard.admins.layouts.admin-dash-layout')

@section('title', 'settings')

@section('content')
<div class="container">
    <div class="content-header">
        <h2 class="page-header">Add New Patient</h2>
    </div>

    <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name">Patient Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="type_of_disease">Type of Disease:</label>
                    <input type="text" name="type_of_disease" id="type_of_disease" class="form-control" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Profile Image:</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="gallery">Gallery Images:</label>
                    <input type="file" name="gallery[]" id="gallery" class="form-control" multiple>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="case_details">Case Details:</label>
                    <textarea name="case_details" id="case_details" class="form-control"></textarea>
                </div>
            </div>
            
        </div>

        <div class="row pt-4 pb-4">
            <div class="col-sm-12">
                <h3>Payment Details</h3>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="doctor_fee">Doctor Fee:</label>
                    <input type="number" name="doctor_fee" id="doctor_fee" class="form-control" step="0.01" required>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="payment">Payment:</label>
                    <input type="number" name="payment" id="payment" class="form-control" step="0.01" required>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="due_payment">Due Payment:</label>
                    <input type="number" name="due_payment" id="due_payment" class="form-control" step="0.01">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="total_payment">Total Payment:</label>
                    <input type="number" name="total_payment" id="total_payment" class="form-control" step="0.01" required>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="doctor_name">Doctor Name:</label>
                    <input type="text" name="doctor_name" id="doctor_name" class="form-control" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="next_schedule_date">Next Schedule Date:</label>
                    <input type="date" name="next_schedule_date" id="next_schedule_date" class="form-control">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Patient</button>
    </form>
</div>
@endsection
