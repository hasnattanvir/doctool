@extends('dashboard.admins.layouts.admin-dash-layout')

@section('content')
<section class="content pt-4">
  <div class="row">
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
                <h3 style="font-family: &quot;Source Sans Pro&quot;, Bangla571, sans-serif;">150</h3>
                <p>Total Patient</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag" style="font-family: Ionicons, Bangla571, sans-serif;"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right" style="font-family: FontAwesome, Bangla571, sans-serif;"></i></a>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                <h3 style="font-family: &quot;Source Sans Pro&quot;, Bangla571, sans-serif;">53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars" style="font-family: Ionicons, Bangla571, sans-serif;"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right" style="font-family: FontAwesome, Bangla571, sans-serif;"></i></a>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                <h3 style="font-family: &quot;Source Sans Pro&quot;, Bangla571, sans-serif;">44</h3>

                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add" style="font-family: Ionicons, Bangla571, sans-serif;"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right" style="font-family: FontAwesome, Bangla571, sans-serif;"></i></a>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                <h3 style="font-family: &quot;Source Sans Pro&quot;, Bangla571, sans-serif;">65</h3>

                <p>Due Prayment</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph" style="font-family: Ionicons, Bangla571, sans-serif;"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right" style="font-family: FontAwesome, Bangla571, sans-serif;"></i></a>
          </div>
      </div>
      <!-- ./col -->
  </div>
</section>
@endsection
