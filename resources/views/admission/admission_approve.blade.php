@extends('layouts.master')

@section('title',"Register List")

@section('content')

    <table class="table table-striped table-bordered">
        <u><h1 style="text-align: center; margin-bottom: 30px;">Student's Information</h1></u>
        <tr>
            <th>Sl</th>
            <th>Photo</th>
            <th>Student Name</th>
            <th>Student Name(Bangla)</th>
            <th>Class</th>
            <th>Year</th>
            <th>Status</th>
            <th style="text-align: center;">Action</th>
        </tr>
        <?php $sl=1; ?>
        @foreach($data as $student)
            <tr>
                <td>{{$sl++}}</td>
                <td><img width="50px" height="auto" src="public/files/admission/{{$student->image}}"></td>
                <td><a href="{{route('admission.show', $student->id)}}">{{$student->sname}}</a></td>
                <td>{{$student->sbname}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->year}}</td>
                <td><a href="{{url('admission/approve', $student->id)}}">{{$student->status}}</a></td>
                <td> {!! Form::open(array('route'=>['admission.destroy', $student->id], 'method'=>'DELETE', 'class'=>'form-horizontal', 'files'=>'true')) !!}
                    <button type="submit" style="width:80px;" class="btn btn-danger" onclick="return deleteconfirm()"><i class="fa fa-trash"> Delete</i></button>
                    {!! Form::close() !!}</td>
            </tr>
         @endforeach
        </table>
    {{ $data->links() }}
@endsection*