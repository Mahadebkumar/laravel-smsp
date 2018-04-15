@extends('layouts.master')

@section('title')
    Add new
@endsection


@section('content')

    {!! Form::open(array('route'=>'teacher.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
    <u><h1 style="text-align: center; margin-bottom: 20px;">Teacher Registration Form..!!</h1></u>
    <table class="table table-stripped">
        <tr class="{{ $errors->has('tid') ? 'has-error' : '' }}">
            <td>{{ Form::label('tid', 'Teacher ID', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::number('tid', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type teacher id'))}}
                @if($errors->has('tid'))
                    <span class="help-block" style="color:red; display:block">
              <strong>{{ $errors->first('tid') }}</strong>
                       </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('tname') ? 'has-error' : '' }}">
            <td>{{ Form::label('tname', 'Teacher Name', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('tname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type teacher name'))}}
                @if($errors->has('tname'))
                    <span class="help-block" style="color:re; display:block">
              <strong>{{ $errors->first('tname') }}</strong>
                       </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('tnid') ? 'has-error' : '' }}">
            <td>{{ Form::label('tnid', 'Teacher NID', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::number('tnid', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type teacher  nid'))}}
                @if($errors->has('tnid'))
                    <span class="help-block" style="color:red; display:block">
              <strong>{{ $errors->first('tnid') }}</strong>
                       </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('gender') ? 'has-error' : '' }}">
            <td>{{ Form::label('gender', 'Gender', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::radio('gender', 'male', false, ['id' => 'male']) }}Male
                {{ Form::radio('gender', 'female', false, ['id' => 'female']) }}Female
                @if($errors->has('gender'))
                    <span class="help-block" style="color:red; display:block">
              <strong>{{ $errors->first('gender') }}</strong>
                       </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('dob') ? 'has-error' : '' }}">
            <td>{{ Form::label('dob', 'Date Of Birth', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::date('dob', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type date of birth'))}}
                @if($errors->has('dob'))
                    <span class="help-block" style="color:red; display:block">
              <strong>{{ $errors->first('dob') }}</strong>
                       </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('blood') ? 'has-error' : '' }}">
            <td>{{ Form::label('blood', 'Blood Group', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::select('blood', ['null'=>'Select blood group*','A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-' ], array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your blood group'))}}
                @if($errors->has('blood'))
                    <span class="help-block" style="color:red; display:block">
              <strong>{{ $errors->first('blood') }}</strong>
                       </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('religion') ? 'has-error' : '' }}">
            <td>{{ Form::label('religion', 'Religion', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('religion', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your religion'))}}
                @if($errors->has('religion'))
                    <span class="help-block" style="color:red; display:block">
              <strong>{{ $errors->first('religion') }}</strong>
                       </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('phone') ? 'has-error' : '' }}">
            <td>{{ Form::label('phone', 'Phone', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::number('phone', null, array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your phone number', 'id'=>'phone'))}}
                @if($errors->has('phone'))
                    <span class="help-block" style="color:red; display:block">
              <strong>{{ $errors->first('phone') }}</strong>
                       </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('email') ? 'has-error' : '' }}">
            <td>{{ Form::label('email', "Email", array('class'=>'control-label'))}}	</td>
            <td>{{ Form::email('email', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your email'))}}
                @if($errors->has('email'))
                    <span class="help-block" style="color:red; display:block">
              <strong>{{ $errors->first('email') }}</strong>
                       </span>
                @endif
            </td>
        </tr>
        <tr class="{{ $errors->has('address') ? 'has-error' : '' }}">
            <td>{{ Form::label('address', 'Address', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::textarea('address', '',['size' => '23x4'], array('class'=>'col-md-6 form-control', 'placeholder'=>' Type your address*'))}}
                @if($errors->has('address'))
                    <span class="help-block" style="color:red; display:block">
              <strong>{{ $errors->first('address') }}</strong>
                       </span>
                @endif
            </td>
        </tr>

        <tr class="{{ $errors->has('image') ? 'has-error' : '' }}">
            <td>{{ Form::label('image', 'Profile Image', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::file('image', array('class'=>'col-md-6 form-control'))}}

                @if($errors->has('image'))
                    <span class="help-block" style="color:red; display:block">
          <strong>{{ $errors->first('image') }}</strong>
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