@extends('layouts.master')

@section('title')
    Add new
@endsection


@section('content')

    {!! Form::open(array('route'=>'info.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
        <u><h1 style="text-align: center; margin-bottom: 20px;">Student Registration Form..!!</h1></u>
        <table class="table table-stripped">
            <tr class="{{ $errors->has('sname') ? 'has-error' : '' }}">
                <td>{{ Form::label('sname', 'Student Name', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('sname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type student name'))}}
                    @if($errors->has('sname'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('sname') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('sbname') ? 'has-error' : '' }}">
                <td>{{ Form::label('sbname', 'Name', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('sbname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>''))}}
                    @if($errors->has('sbname'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('sbname') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('sid') ? 'has-error' : '' }}">
                <td>{{ Form::label('sid', 'ID', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('sid', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your student id'))}}
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
            <tr class="{{ $errors->has('reg') ? 'has-error' : '' }}">
                <td>{{ Form::label('reg', 'Reg', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('reg', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your reg'))}}
                    @if($errors->has('reg'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('reg') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('class') ? 'has-error' : '' }}">
                <td>{{ Form::label('class', 'Class', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::select('class', ['null'=>'Select class*','six'=>6,'seven'=>7,'eight'=>8,'nine'=>9,'ten'=>10], array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your class name'))}}
                    @if($errors->has('class'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('class') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('section') ? 'has-error' : '' }}">
                <td>{{ Form::label('section', 'Section', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::select('section', ['null'=>'Select section*', 'A'=>'A', 'B'=>'B'], array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your section name'))}}
                    @if($errors->has('section'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('section') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('session') ? 'has-error' : '' }}">
                <td>{{ Form::label('session', 'Session', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('session', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your session'))}}
                    @if($errors->has('session'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('session') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('fname') ? 'has-error' : '' }}">
                <td>{{ Form::label('fname', "Father's Name", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('fname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>"Type your father's name"))}}
                    @if($errors->has('fname'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('fname') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('mname') ? 'has-error' : '' }}">
                <td>{{ Form::label('mname', "Mother's Name", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('mname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>"Type your mother's name"))}}
                    @if($errors->has('mname'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('mname') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('gnid') ? 'has-error' : '' }}">
                <td>{{ Form::label('gnid', "Guardian's NID", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('gnid', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Your father/mother NID number'))}}
                    @if($errors->has('gnid'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('gnid') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('gender') ? 'has-error' : '' }}">
                <td>{{ Form::label('gender', 'Gender', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::radio('gender', 'male', false, ['id' => 'male']) }}Male
                    {{ Form::radio('gender', 'female', false, ['id' => 'female']) }}Female
                    @if($errors->has('gender'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('gender') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('dob') ? 'has-error' : '' }}">
                <td>{{ Form::label('dob', 'DOB', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::date('dob', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your date of birth'))}}
                    @if($errors->has('dob'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('dob') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('blood') ? 'has-error' : '' }}">
                <td>{{ Form::label('blood', 'Blood Group', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::select('blood', ['null'=>'Select blood group*','A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-' ], array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your blood group'))}}
                    @if($errors->has('blood'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('blood') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('religion') ? 'has-error' : '' }}">
                <td>{{ Form::label('religion', 'Religion', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('religion', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your religion'))}}
                    @if($errors->has('religion'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('religion') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('phone') ? 'has-error' : '' }}">
                <td>{{ Form::label('phone', 'Phone', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::number('phone', null, array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your phone number', 'id'=>'phone'))}}
                    @if($errors->has('phone'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('phone') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('gname') ? 'has-error' : '' }}">
                <td>{{ Form::label('gname', "Guardian Name", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('gname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your guardian name'))}}
                    @if($errors->has('gname'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('gname') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('address') ? 'has-error' : '' }}">
                <td>{{ Form::label('address', 'Address', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::textarea('address', '', array('class'=>'col-md-6 form-control', 'placeholder'=>' Type your address*'))}}
                    @if($errors->has('address'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('address') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>

            <tr class="{{ $errors->has('image') ? 'has-error' : '' }}">
                <td>{{ Form::label('image', 'Profile Image', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::file('image', array('class'=>'col-md-6 form-control'))}}

                    @if($errors->has('image'))
                        <span class="help-block" style="display:block">
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