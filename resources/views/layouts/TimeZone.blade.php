@extends('layouts.app')
@section('content')  

<script src="{{asset('/js/jquery-2.2.2.min.js')}}"></script>
<link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src='js/Ajaxjs.js'></script>

<table id="timezone" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Offset</th> 
            <th>Actions</th>

        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Offset</th>
            <th>Actions</th>

        </tr>
    </tfoot>
</table>

@stop
