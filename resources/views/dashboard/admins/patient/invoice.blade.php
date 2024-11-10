@extends('dashboard.admins.layouts.admin-dash-layout')
@section('title', 'settings')
@section('content')
<section class="invoice pt-5 pb-5 pl-5 pr-5">
    <div>
        <table width="100%">
            <tr>
                <td>
                    <h2 class="page-header" style="font-family: &quot;Source Sans Pro&quot;, Bangla361, sans-serif; ">
                        <span>Hasi Dental Care.</span>
                    </h2>
                </td>
                <td class="text-right">
                    <small class="pull-right">Date: 2/10/2014</small>
                </td>
            </tr>
        </table>
    </div>
    <!-- info row -->
    <div class="row invoice-info pt-4">
      <div class="col-sm-6 invoice-col">
        <address>
          <strong>Dr. Saima Akter Hasi</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
          Email: info@almasaeedstudio.com
        </address>
      </div>
     
      <!-- /.col -->
      <div class="col-sm-6 invoice-col d-flex justify-content-end">
       <div class="right_box">
        <b>Invoice #007612</b><br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Patient No:</b> 968-34567
       </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
                <th>Qty</th>
                <th>Product</th>
                <th>Serial #</th>
                <th>Description</th>
                <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>1</td>
                <td>Call of Duty</td>
                <td>455-981-221</td>
                <td>El snort testosterone trophy driving gloves handsome</td>
                <td>$64.50</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>

    <div class="row justify-content-end pt-4">
      <div class="col-md-4">
        <p class="lead">Amount Due 2/22/2014</p>
        <div class="table-responsive">
          <table class="table">
                <tbody>
                    <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                    </tr>
                    <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                    </tr>
                    <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-md-6">
            <button class="btn btn-default" onclick="window.print()"><i class="fa fa-print"></i> Print Invoice</button>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                <i class="fa fa-fw fa-download"></i> Generate PDF
            </button>
        </div>
    </div>
  </section>