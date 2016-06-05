@extends('layouts.app')
@section('content')  
<table id="timezone" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Offset</th> 
            <th>Actions</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($data as $value)
        <tr>
            <td>{{$value['Id']}}</td>
            <td>{{$value['Name']}}</td>
            <td>{{$value['Offset']}}</td>
        </tr> 
        @endforeach
    </tbody>
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
