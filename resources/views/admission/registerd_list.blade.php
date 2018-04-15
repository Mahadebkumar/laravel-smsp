@extends('layouts.master')

@section('title',"Register List")

@section('content')

    <table class="table table-striped table-bordered table-responsive">
        <u><h1 style="text-align: center; margin-bottom: 30px;">Student's Information</h1></u>
        <tr>
            <th>Sl</th>
            <th>Photo</th>
            <th>Student Name</th>
            <th>Student Name(Bangla)</th>
            <th>Class</th>
            <th>Year</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Father's Occupation</th>
            <th>Mother's Occupation</th>
            <th>Annual Income</th>
            <th>Gardian's NID</th>
            <th>Gender</th>
            <th>Birth</th>
            <th>Blood</th>
            <th>Religion</th>
            <th>Phone</th>
            <th>Gardian</th>
            <th>Privious School</th>
            <th>Status</th>
            <th>present Address</th>
            <th>Permanent Address</th>
            <th>Quotas</th>
            <th style="text-align: center;">Action</th>
        </tr>
        <?php $sl=1; ?>
        @foreach($data as $student)
            <tr>
                <td>{{$sl++}}</td>
                <td><img width="50px" height="auto" src="public/files/admission/{{$student->image}}"></td>
                <td><a href="{{route('info.show', $student->id)}}">{{$student->sname}}</a></td>
                <td>{{$student->sbname}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->year}}</td>
                <td>{{$student->fname}}</td>
                <td>{{$student->mname}}</td>
                <td>{{$student->foccupation}}</td>
                <td>{{$student->moccupation}}</td>
                <td>{{$student->income}}</td>
                <td>{{$student->gnid}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->dob}}</td>
                <td>{{$student->blood}}</td>
                <td>{{$student->religion}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->gname}}</td>
                <td>{{$student->preschool}}</td>
                <td>{{$student->status}}</td>
                <td>{{$student->preaddress}}</td>
                <td>{{$student->peraddress}}</td>
                <td>{{$student->quotas}}</td>
                <td> {!! Form::open(array('route'=>['admission.destroy', $student->id], 'method'=>'DELETE', 'class'=>'form-horizontal', 'files'=>'true')) !!}
                    <button type="submit" style="width:80px;" class="btn btn-danger" onclick="return deleteconfirm()"><i class="fa fa-trash"> Delete</i></button>
                    {!! Form::close() !!}</td>
            </tr>
         @endforeach
    {{ $data->links() }}
@endsection*