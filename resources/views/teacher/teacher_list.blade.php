@extends('layouts.master')

@section('title', "Teacher's List")

@section('content')
    <table class="table table-striped table-bordered table-responsive">
        <h2 style="margin:auto; width:500px; height:50px; background-color:#a6e1ec; text-align: center; margin-bottom: 30px;">Show Teacher's List</h2>
        <tr>
            <th>SL</th>
            <th>Photo</th>
            <th>Teacher_Name</th>
            <th>Teacher_ID</th>
            <th>Gender</th>
            <th>Phone</th>
            <th style="text-align: center;" colspan="2">Action</th>
        </tr>
        <?php $sl=1; ?>
        @foreach($data as $teacher)
            <tr>
                <td>{{$sl++}}</td>
                <td><img width="40px" src="public/files/teacher/{{$teacher->image}}"></td>
                <td><a href="{{route('teacher.show', $teacher->id)}}">{{$teacher->tname}}</a></td>
                <td>{{$teacher->tid}}</td>
                <td>{{$teacher->gender}}</td>
                <td>{{$teacher->phone}}</td>
                <td><a href="{{route('teacher.edit', $teacher->id)}}" style="width:70px;" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></td>
                <td> {!! Form::open(array('route'=>['teacher.destroy', $teacher->id], 'method'=>'DELETE', 'class'=>'form-horizontal', 'files'=>'true')) !!}
                    <button type="submit" style="width:80px;" class="btn btn-danger" onclick="return deleteconfirm()"><i class="fa fa-trash"> Delete</i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection