@extends('layouts.main')

@section('title', 'Home')

@section('content')
    @include('sections.slider')         <!-- Slider Section -->
    @include('sections.schedule')       <!-- Schedule Section -->
    @include('sections.feautes')    <!-- Feautes Section -->
    @include('sections.funfact')    <!-- Funfact Section -->
    @include('sections.whychooseus')    <!-- Why Choose us Section -->
    @include('sections.calltoaction')    <!-- Call to Action Section -->
    @include('sections.portfolio')    <!-- Portfolio Section -->
    @include('sections.service')    <!-- Service Section -->
    @include('sections.pricetable')    <!-- Price Table Section -->
    @include('sections.blog')    <!-- Blog Section -->
    @include('sections.clientslider')    <!-- Client Slider Section -->
    @include('sections.appointment')    <!-- Appointment Section -->
    @include('sections.newslatter')    <!-- Newslatter Section -->
@endsection
