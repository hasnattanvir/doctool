@extends('dashboard.admins.layouts.admin-dash-layout')
@section('title', 'settings')
@section('content')
 <section class="p-4">
     <div class="content" >
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Patient Info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Labal</th>
                            <th>Info</th>
                        </tr>
                        <tr>
                            <td><b> Patient Name </b></td>
                            <td>
                                <p>{{ $patient->name }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <b>Phone</b>
                            </td>
                            <td>
                                <p>{{ $patient->phone }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td>
                               <p>{{ $patient->email }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Type of Disease</b></td>
                            <td>
                              <p>{{ $patient->type_of_disease }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Case Details</b></td>
                            <td>
                              <p>{{ $patient->type_of_disease }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Case Photo</b></td>
                            <td>
                              <p>{{ $patient->type_of_disease }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Doctor Fee:</b></td>
                            <td>
                              <p>{{ $patient->doctor_fee }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Payment:</b></td>
                            <td>
                              <p>{{ $patient->doctor_fee }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Due Payment:</b></td>
                            <td>
                                <span class="label label-danger" style="background-color:#dd4b39 !important; color:#fff;padding:3px 7px; border-radius:3px;">
                                    {{ $patient->due_payment }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Total Payment:</b></td>
                            <td>
                              <p>{{ $patient->total_payment }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Next Schedule:</b></td>
                            <td>
                              <p>{{ $patient->next_schedule_date }}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
     </div>
 </section>
@endsection