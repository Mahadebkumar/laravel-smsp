@extends('layouts.master')

@section('title', 'Add Mark')
@section('content')
    {!! Form::open(array('route'=>'exam.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
    <u><h1 style="text-align: center; margin-bottom: 20px;">Add Exam</h1></u>
    <table class="table table-stripped">
        <tr class="{{ $errors->has('exam_id') ? 'has-error' : '' }}">
            <td>{{ Form::label('exam_id', 'Exam Name', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('exam_id', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your exam_name'))}}
                @if($errors->has('exam_id'))
                    <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('exam_id') }}</strong>
                               </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('held_on') ? 'has-error' : '' }}">
            <td>{{ Form::label('held_on', 'Held On', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('held_on', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type held on'))}}
                @if($errors->has('held_on'))
                    <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('held_on') }}</strong>
                               </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('year') ? 'has-error' : '' }}">
            <td>{{ Form::label('year', 'Exam Year', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::number('year', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your exam year'))}}
                @if($errors->has('year'))
                    <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('year') }}</strong>
                               </span>
                @endif
            </td>
        </tr>

        <tr>
            <td></td>
            <td>{{Form::submit('Save', array('class'=>'btn btn-success'))}} </td>
        </tr>
    </table>
    {!! Form::close() !!}
@endsection