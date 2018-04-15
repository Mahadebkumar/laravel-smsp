@extends('layouts.master')

@section('title',"Student's List")

@section('content')

   <table class="table table-bordered table-striped table-responsive">
       <u><h1 style="text-align: center; margin-bottom: 30px;">Student's Information</h1></u>
       <tr>
           <th>Sl</th>
           <th>Photo</th>
           <th>Name</th>
           <th>ID</th>
           <th>Class</th>
           <th>Section</th>
           <th>Roll</th>
           <th style="text-align:center;" colspan="2">Action</th>
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
               <td> {!! Form::open(array('route'=>['info.destroy', $student->id], 'method'=>'DELETE', 'class'=>'form-horizontal', 'files'=>'true')) !!}
                   <button type="submit" style="width:80px;" class="btn btn-danger" onclick="return deleteconfirm()"><i class="fa fa-trash"> Delete</i></button>
                   {!! Form::close() !!}</td>
           </tr>
       @endforeach
   </table>
   {{ $data->links() }}
   {{--<nav aria-label="Page navigation example">--}}
       {{--<ul class="pagination">--}}
           {{--<li class="page-item">--}}
               {{--<a class="page-link" href="#" aria-label="Previous">--}}
                   {{--<span aria-hidden="true">&laquo;</span>--}}
                   {{--<span class="sr-only">Previous</span>--}}
               {{--</a>--}}
           {{--</li>--}}
           {{--<li class="page-item"><a class="page-link" href="http://localhost/smsp/public/info?page=1">1</a></li>--}}
           {{--<li class="page-item"><a class="page-link" href="http://localhost/smsp/public/info?page=2">2</a></li>--}}
           {{--<li class="page-item"><a class="page-link" href="http://localhost/smsp/public/info?page=3">3</a></li>--}}
           {{--<li class="page-item">--}}
               {{--<a class="page-link" href="#" aria-label="Next">--}}
                   {{--<span aria-hidden="true">&raquo;</span>--}}
                   {{--<span class="sr-only">Next</span>--}}
               {{--</a>--}}
           {{--</li>--}}
       {{--</ul>--}}
   {{--</nav>--}}

@endsection