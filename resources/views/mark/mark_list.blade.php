@extends('layouts.master')

@section('title', "Mark's List")
@section('content')
    <table class="table table-striped table-bordered table-responsive">
        <h2 style="text-align: center; margin-bottom: 30px;">Show Mark</h2>
        <tr>
            <th>SL</th>
            <th>Subject_ID</th>
            <th>Mark</th>
            <th>Student ID</th>
            <th>Exam ID</th>
            <th>Year</th>
            <th style="text-align: center;" colspan="2">Action</th>
        </tr>
        <?php $sl=1; ?>
        @foreach($data as $mark)
            <tr>
                <td>{{$sl++}}</td>
                <td>{{$mark->subid}}</td>
                <td>{{$mark->mark}}</td>
                <td>{{$mark->sid}}</td>
                <td>{{$mark->examid}}</td>
                <td>{{$mark->year}}</td>
                <td><a href="{{route('mark.edit', $mark->id)}}" style="width:70px;" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></td>
                <td> {!! Form::open(array('route'=>['mark.destroy', $mark->id], 'method'=>'DELETE', 'class'=>'form-horizontal', 'files'=>'true')) !!}
                    <button type="submit" style="width:80px;" class="btn btn-danger" onclick="return deleteconfirm()"><i class="fa fa-trash"> Delete</i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection