@extends('layouts.master')

@section('title', 'Show subject')

@section('content')
   <table class="table table-striped table-bordered table-responsive">
       <h2 style="text-align: center; margin-bottom: 30px;">Show Subject</h2>
       <tr>
           <th>SL</th>
           <th>Subject_ID</th>
           <th>Subject_Name</th>
           <th>Full_Mark</th>
           <th>Class</th>
           <th>Teacher_ID</th>
           <th style="text-align: center;" colspan="2">Action</th>
       </tr>
       <?php $sl=1; ?>
      @foreach($data as $subject)
           <tr>
               <td>{{$sl++}}</td>
               <td>{{$subject->subid}}</td>
               <td>{{$subject->subname}}</td>
               <td>{{$subject->fmark}}</td>
               <td>{{$subject->class}}</td>
               <td>{{$subject->tid}}</td>
               <td><a href="{{route('subject.edit', $subject->id)}}" style="width:70px;" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></td>
               <td> {!! Form::open(array('route'=>['subject.destroy', $subject->id], 'method'=>'DELETE', 'class'=>'form-horizontal', 'files'=>'true')) !!}
                   <button type="submit" style="width:80px;" class="btn btn-danger" onclick="return deleteconfirm()"><i class="fa fa-trash"> Delete</i></button>
                   {!! Form::close() !!}
               </td>
           </tr>
      @endforeach
   </table>
   {{ $data->links() }}
@endsection