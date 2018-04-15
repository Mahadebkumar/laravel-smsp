@extends('layouts.master')

@section('title', "Exam's List")
@section('content')
    <table class="table table-striped table-bordered table-responsive">
        <h2 style="text-align: center; margin-bottom: 30px;">Exam List</h2>
        <tr>
            <th>SL</th>
            <th>Exam_ID</th>
            <th>Held_on</th>
            <th>Year</th>
            <th style="text-align: center;" colspan="2">Action</th>
        </tr>
        <?php $sl=1; ?>
        @foreach($data as $exam)
            <tr>
                <td>{{$sl++}}</td>
                <td>{{$exam->exam_id}}</td>
                <td>{{$exam->held_on}}</td>
                <td>{{$exam->year}}</td>
                <td><a href="{{route('exam.edit', $exam->id)}}" style="width:70px;" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></td>
                <td> {!! Form::open(array('route'=>['exam.destroy', $exam->id], 'method'=>'DELETE', 'class'=>'form-horizontal', 'files'=>'true')) !!}
                    <button type="submit" style="width:80px;" class="btn btn-danger" onclick="return deleteconfirm()"><i class="fa fa-trash"> Delete</i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection