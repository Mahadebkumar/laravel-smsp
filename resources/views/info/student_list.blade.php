@extends('layouts.master')

@section('title',"Student's List")

@section('content')

   <table class="table table-bordered table-striped table-responsive">
       <u><h1 style="text-align: center; margin-bottom: 30px;">Student's Information</h1></u>
       <div class="form-group">
           <form action="{{ action('RegistrationController@search') }}" method="post">
               {{ csrf_field() }}
               <div class="row">
                   <div class="col-md-3">Class:<input type="text" class="form-control" name="class"></div>
                   <div class="col-md-3">Section:<input type="text" class="form-control" name="section"></div>
                   <div class="col-md-3">Roll:<input type="text" class="form-control" name="roll"></div>
                   <div class="col-md-2"><input type="submit" class="btn btn-primary" name="submit" value="Search" style="margin-top: 25px;"></div>
               </div>
           </form>
       </div>
       <tr>
           <td>Sl</td>
           <td>Photo</td>
           <td>Name</td>
           <td>ID</td>
           <td>Class</td>
           <td>Section</td>
           <td>Roll</td>
           <td style="text-align:center;" colspan="3">Action</td>
       </tr>
       <?php $sl=1; ?>
       @foreach($data as $student)
           <tr>
               <td>{{$sl++}}</td>
               <td><img width="50px" height="auto" src="public/files/student/{{$student->image}}"></td>
               <td><a href="{{route('info.show', $student->id)}}">{{$student->sname}}</a></td>
               <td>{{$student->sid}}</td>
               <td>{{$student->class}}</td>
               <td>{{$student->section}}</td>
               <td>{{$student->roll}}</td>
               <td><a href="{{route('info.edit', $student->id)}}" style="width:70px;" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></td>
               <td><a href="{{url('mark/new', $student->id)}}" style="width:70px;" class="btn btn-info"><i class="fa fa-edit"> Mark</i></a></td>
               <td> {!! Form::open(array('route'=>['info.destroy', $student->id], 'method'=>'DELETE', 'class'=>'form-horizontal', 'files'=>'true')) !!}
                   <button type="submit" style="width:80px;" class="btn btn-danger" onclick="return deleteconfirm()"><i class="fa fa-trash"> Delete</i></button>
                   {!! Form::close() !!}</td>
           </tr>
       @endforeach
   </table>

@endsection