@extends('layouts.master')

@section('title', 'Add subject')

@section('content')
    {!! Form::open(array('route'=>'subject.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
        <u><h1 style="text-align: center; margin-bottom: 20px;">Add Subject</h1></u>
        <table class="table table-stripped">
            <tr class="{{ $errors->has('subid') ? 'has-error' : '' }}">
                <td>{{ Form::label('subid', 'Subject ID', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('subid', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your subject id'))}}
                    @if($errors->has('subid'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('subid') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('subname') ? 'has-error' : '' }}">
                <td>{{ Form::label('subname', 'Subject Name', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('subname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your subject name'))}}
                    @if($errors->has('subname'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('subname') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('fmark') ? 'has-error' : '' }}">
                <td>{{ Form::label('fmark', 'Full Mark', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('fmark', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your subject fullmark '))}}
                    @if($errors->has('fmark'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('fmark') }}</strong>
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
            <tr class="{{ $errors->has('tid') ? 'has-error' : '' }}">
                <td>{{ Form::label('tid', 'Teacher Id', array('class'=>'control-label'))}}	</td>
                <td>
                    <select name="tid" id="" class="form-control col-md-6">
                        <option value="">Select teacher</option>
                        @foreach($teachers as $teacher)
                            <option value="{{$teacher->tid}}">{{$teacher->tname}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('tid'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('tid') }}</strong>
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