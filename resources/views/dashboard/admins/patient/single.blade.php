@extends('dashboard.admins.layouts.admin-dash-layout')
@section('title', 'settings')
@section('content')
    <div class="container" >
        <h2>Invoice for {{ $patient->name }}</h2>
        <p>Phone: {{ $patient->phone }}</p>
        <p>Email: {{ $patient->email }}</p>
        <p>Type of Disease: {{ $patient->type_of_disease }}</p>
        <p>Total Payment: {{ $patient->total_payment }}</p>
        <p>Due Payment: {{ $patient->due_payment }}</p>
        <p>Doctor Fee: {{ $patient->doctor_fee }}</p>
        <p>Next Scheduled Date: {{ $patient->next_schedule_date }}</p>
        <button onclick="window.print()">Print Invoice</button>
    </div>
@endsection