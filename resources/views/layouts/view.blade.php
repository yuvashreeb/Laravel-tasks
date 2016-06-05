@extends('layouts.app')
@section('content')  
<section class='content'>
<table id="timeZone" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>TimeZone Name</th>
            <th>Offset</th>
        </tr>
    </thead>
    <tbody>
        @foreach($User as $value)
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
            <th>TimeZone Name</th>
            <th>Offset</th>
        </tr>
    </tfoot>
</table>
@endsection
</section>