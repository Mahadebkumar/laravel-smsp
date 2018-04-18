@extends('layouts.master')

@section('title', 'Add class/Section')
@section('content')
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(array('route'=>'class.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
            <u><h1 style="text-align: center; margin-bottom: 20px;">Add Class-Section</h1></u>
            <table class="table table-stripped">
                <tr class="{{ $errors->has('class') ? 'has-error' : '' }}">
                    <td>{{ Form::label('class', 'Class Name', array('class'=>'control-label'))}}</td>
                    <td>{{ Form::text('class', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Enter class name'))}}
                        @if($errors->has('class'))
                            <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('class') }}</strong>
                               </span>
                        @endif
                    </td>
                </tr>
                <tr class="{{ $errors->has('section') ? 'has-error' : '' }}">
                    <td>{{ Form::label('section', 'Section', array('class'=>'control-label'))}}	</td>
                    <td>{{ Form::text('section', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Enter section name'))}}
                        @if($errors->has('section'))
                            <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('section') }}</strong>
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
        </div>
    </div>
@endsection