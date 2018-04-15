@extends('layouts.master')

@section('title', 'Add Mark')
@section('content')
    {!! Form::open(array('route'=>'mark.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
        <u><h1 style="text-align: center; margin-bottom: 20px;">Add Mark</h1></u>
        <table class="table table-stripped">
            <tr class="{{ $errors->has('subid') ? 'has-error' : '' }}">
                <td>{{ Form::label('subid', 'Subject ID', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::number('subid', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your subject id'))}}
                    @if($errors->has('subid'))
                        <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('subid') }}</strong>
                               </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('mark') ? 'has-error' : '' }}">
                <td>{{ Form::label('mark', 'Mark', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::number('mark', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type mark'))}}
                    @if($errors->has('mark'))
                        <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('mark') }}</strong>
                               </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('sid') ? 'has-error' : '' }}">
                <td>{{ Form::label('sid', 'Student ID', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::number('sid', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your student id '))}}
                    @if($errors->has('sid'))
                        <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('sid') }}</strong>
                               </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('examid') ? 'has-error' : '' }}">
                <td>{{ Form::label('examid', 'Exam ID', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::number('examid', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your exam id '))}}
                    @if($errors->has('examid'))
                        <span class="help-block" style="display:block">
                      <strong>{{ $errors->first('examid') }}</strong>
                               </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('year') ? 'has-error' : '' }}">
                <td>{{ Form::label('year', 'Year', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::number('year', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type year '))}}
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