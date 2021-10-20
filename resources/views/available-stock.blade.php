@extends('layouts.app', ['activePage' => 'available-stock', 'titlePage' => __('Available Stock')])
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
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table datatable">
                  <thead>
                      <tr>
                          <th>Serial</th>
                          <th>Model</th>
                          <th>Color</th>
                          <th>Reg no</th>
                          <th>Price</th>
                          <th>Suplier type</th>
                          <th>Phone</th>
                          <th>P. date</th>
                          <th>Action</th>       
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
        "ordering": false,
        ajax: "{{ route('available-stock') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'link', name: 'link', orderable: false, searchable: false},
             {data: 'color', name: 'color'},
             {data: 'reg_no', name: 'reg_no'},
             {data: 'price', name: 'price'},
             {data: 'surplier_type', name: 'surplier_type'},
             {data: 'phone_number', name: 'phone_number'},
             {data: 'purchase_date', name: 'purchase_date'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>

@endsection