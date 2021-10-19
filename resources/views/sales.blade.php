@extends('layouts.app', ['activePage' => 'sales', 'titlePage' => __('Sales')])
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
@section('content')
<div class="content">
  <div class="container-fluid">
  <div class="container mt-5">
    <table class="table table-stripped yajra-datatable">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Car</th>
                <th>Color</th>
                <th>Buyer</th>
                <th>Email</th>
                <th>Price</th>
                <th>Balance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="bg-light">
        </tbody>
    </table>
</div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('get.sales') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {
                data: 'link', 
                name: 'link', 
                orderable: true, 
                searchable: true
            },
            {data: 'color', name: 'color'},
            {data: 'company_name', name: 'company_name'},
            {data: 'email', name: 'email'},
            {data: 'price', name: 'price'},
            {data: 'balance', name: 'balance'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
@endsection