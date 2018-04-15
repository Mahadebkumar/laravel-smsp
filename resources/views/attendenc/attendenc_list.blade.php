@extends('layouts.master')

@section('title', 'Attendenc List')
@section('content')
    <table class="table table-striped table-bordered table-responsive">
        <h2 style="text-align: center; margin-bottom: 30px;">Attendenc List</h2>
        <tr>
            <th>SL</th>
            <th>Student_ID</th>
            <th>Roll</th>
            <th>Class</th>
            <th>Section</th>
            <th>Date</th>
            <th>In Time</th>
            <th>Out Time</th>
            <th>Status</th>
            <th style="text-align: center;" colspan="2">Action</th>
        </tr>
        <?php $sl=1; ?>
        @foreach($data as $attendenc)
            <tr>
                <td>{{$sl++}}</td>
                <td>{{$attendenc->sid}}</td>
                <td>{{$attendenc->roll}}</td>
                <td>{{$attendenc->class}}</td>
                <td>{{$attendenc->section}}</td>
                <td>{{$attendenc->date}}</td>
                <td>{{$attendenc->in_time}}</td>
                <td>{{$attendenc->out_time}}</td>
                <td>{{$attendenc->status}}</td>
                <td><a href="{{route('attendenc.edit', $attendenc->id)}}" style="width:70px;" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></td>
                <td> {!! Form::open(array('route'=>['attendenc.destroy', $attendenc->id], 'method'=>'DELETE', 'class'=>'form-horizontal', 'files'=>'true')) !!}
                    <button type="submit" style="width:80px;" class="btn btn-danger" onclick="return deleteconfirm()"><i class="fa fa-trash"> Delete</i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection