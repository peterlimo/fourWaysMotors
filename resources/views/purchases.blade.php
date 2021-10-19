@extends('layouts.app', ['activePage' => 'all_purchases', 'titlePage' => __('Table List')])
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Purchases</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
           
            <div class="table-responsive">
            
            <table class="table table-bordered datatable">
        <thead>
            <tr>
            <th>ID</th>
                <th>MODEL</th>
                <th>MAKE</th>
                <th>Y O M</th>
                <th>COLOR</th>
                <th>REG NO</th>
                <th>LOG BOOK NO</th>
                <th>ENGINE NO</th>
                <th>CHASIS NO</th>
                <th>PRICE</th>
                <th>SURPLIER TYPE</th>
                <th>COMPANY NAME</th>
                <th>FIRST NAME</th>
                <th>MIDDLE NAME</th>
                <th>LAST NAME</th>
                <th>CITY</th>
                <th>PHONE NUMBER</th>
                <th>EMAIL</th>
                <th>NATIONAL ID</th>
                <th>KRA PIN</th>
                <th>PURCHASE DATE</th>
                <th>DESCRIPTION</th>     
                <th>ACTION</th>       
            </tr>
            
        </thead>
        <tbody>
        </tbody>
    </table>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
// var dataSet=new Array();

// dataSet.push([]
// )
$(function () {
    var table = $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: false,
        ajax: "{{ route('getPurchases') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'model', name: 'model'},
             {data: 'make', name: 'make'},
             {data: 'y_o_m', name: 'y_o_m'},
             {data: 'color', name: 'color'},
             {data: 'reg_no', name: 'reg_no'},
             {data: 'log_book_no', name: 'log_book_no'},
             {data: 'engine_no', name: 'engine_no'},
             {data: 'chasis_no', name: 'chasis_no'},
             {data: 'price', name: 'price'},
             {data: 'surplier_type', name: 'surplier_type'},
             {data: 'company_name', name: 'company_name'},
             {data: 'first_name', name: 'first_name'},
             {data: 'middle_name', name: 'middle_name'},
             {data: 'last_name', name: 'last_name'},
             {data: 'city', name: 'city'},
             {data: 'phone_number', name: 'phone_number'},
             {data: 'email', name: 'email'},
             {data: 'national_id', name: 'national_id'},
             {data: 'kra_pin', name: 'kra_pin'},
             {data: 'purchase_date', name: 'purchase_date'},
             {data: 'description', name: 'description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>

@endsection