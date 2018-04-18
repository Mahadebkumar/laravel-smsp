@extends('layouts.master')

@section('title', 'Add subject')

@section('content')
    {!! Form::open(array('route'=>'attendenc.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
    <u><h1 style="text-align: center; margin-bottom: 20px;">Add Subject</h1></u>
    <table class="table table-stripped">
        <tr class="{{ $errors->has('sid') ? 'has-error' : '' }}">
            <td>{{ Form::label('sid', 'Student ID', array('class'=>'control-label','id'=>'sid'))}}	</td>
            <td>{{ Form::text('sid', null, array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your student id'))}}
                @if($errors->has('sid'))
                    <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('sid') }}</strong>
                           </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('roll') ? 'has-error' : '' }}">
            <td>{{ Form::label('roll', 'Roll', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('roll', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your roll'))}}
                @if($errors->has('roll'))
                    <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('roll') }}</strong>
                           </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('class') ? 'has-error' : '' }}">
            <td>{{ Form::label('class', 'Class', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::select('class', ['null'=>'Select class*', 'Six'=>'6', 'Seven'=>'7', 'Eight'=>'8', 'Nine'=>'9', 'Ten'=>'10'], array('class'=>'col-md-6 form-control'))}}
                @if($errors->has('class'))
                    <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('class') }}</strong>
                           </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('section') ? 'has-error' : '' }}">
            <td>{{ Form::label('section', 'Section', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::select('section', ['null'=>'Select section*', 'A'=>'A', 'B'=>'B'], array('class'=>'col-md-6 form-control'))}}
                @if($errors->has('section'))
                    <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('section') }}</strong>
                           </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('date') ? 'has-error' : '' }}">
            <td>{{ Form::label('date', 'Date', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::date('date', '', array('class'=>'col-md-6 form-control'))}}
                @if($errors->has('date'))
                    <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('date') }}</strong>
                           </span>
                @endif

            </td>
        </tr>
        <tr class="{{ $errors->has('in_time') ? 'has-error' : '' }}">
            <td>{{ Form::label('in_time', 'In Time', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::time('in_time', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type '))}}
                @if($errors->has('in_time'))
                    <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('in_time') }}</strong>
                           </span>
                @endif

            </td>
        </tr>
        <tr class="{{ $errors->has('out_time') ? 'has-error' : '' }}">
            <td>{{ Form::label('out_time', 'Out Time', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::time('out_time', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type '))}}
                @if($errors->has('out_time'))
                    <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('out_time') }}</strong>
                           </span>
                @endif

            </td>
        </tr>
        <tr class="{{ $errors->has('status') ? 'has-error' : '' }}">
            <td>{{ Form::label('status', 'Status', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('status', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type status '))}}
                @if($errors->has('status'))
                    <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('status') }}</strong>
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