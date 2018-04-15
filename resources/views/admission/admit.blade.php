<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>New</title>

        <!-- Bootstrap core CSS-->
        <link href="{{asset('/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{asset('/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{asset('/admin/css/sb-admin.css')}}" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">

        <div class="col-md-2"></div>

        <div style="border: 1px solid gray; background-color:#B5B9BA;" class="col-md-8">
        {!! Form::open(array('route'=>'admission.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
        <u><h2 style="text-align: center; margin-bottom: 20px;">Admission Form:</h2></u>
        <table class="table table-stripped">
            <tr class="{{ $errors->has('sname') ? 'has-error' : '' }}">
                <td>{{ Form::label('sname', 'Student Full Name', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('sname', '', array('class'=>'col-md-10 form-control', 'placeholder'=>'Type student name'))}}
                    @if($errors->has('sname'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('sname') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('sbname') ? 'has-error' : '' }}">
                <td>{{ Form::label('sbname', 'Student Full Name(Bangla)', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('sbname', '', array('class'=>'col-md-10 form-control', 'placeholder'=>'Type your bangla name'))}}
                    @if($errors->has('sbname'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('sbname') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>

            <tr class="{{ $errors->has('class') ? 'has-error' : '' }}">
                <td>{{ Form::label('class', 'Class', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::select('class', ['null'=>'Select class*','six'=>6,'seven'=>7,'eight'=>8,'nine'=>9], array('class'=>'col-md-10 form-control', 'placeholder'=>'Type your class name'))}}
                    @if($errors->has('class'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('class') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('year') ? 'has-error' : '' }}">
                <td>{{ Form::label('year', 'Year', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('year', '', array('class'=>'col-md-10 form-control', 'placeholder'=>'Type your session'))}}
                    @if($errors->has('year'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('year') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('fname') ? 'has-error' : '' }}">
                <td>{{ Form::label('fname', "Father's Name", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('fname', '', array('class'=>'col-md-10 form-control', 'placeholder'=>"Type your father's name"))}}
                    @if($errors->has('fname'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('fname') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('mname') ? 'has-error' : '' }}">
                <td>{{ Form::label('mname', "Mother's Name", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('mname', '', array('class'=>'col-md-10 form-control', 'placeholder'=>"Type your mother's name"))}}
                    @if($errors->has('mname'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('mname') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>

            <tr class="{{ $errors->has('foccupation') ? 'has-error' : '' }}">
                <td>{{ Form::label('foccupation', "Father's Occupation", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('foccupation', '', array('class'=>'col-md-10 form-control', 'placeholder'=>"Type your father's occupation"))}}
                    @if($errors->has('foccupation'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('foccupation') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>

            <tr class="{{ $errors->has('moccupation') ? 'has-error' : '' }}">
                <td>{{ Form::label('moccupation', "Mother's Occupation", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('moccupation', '', array('class'=>'col-md-10 form-control', 'placeholder'=>"Type your mother's occupation"))}}
                    @if($errors->has('moccupation'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('moccupation') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>

            <tr class="{{ $errors->has('income') ? 'has-error' : '' }}">
                <td>{{ Form::label('income', "Annual Income", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('income', '', array('class'=>'col-md-10 form-control', 'placeholder'=>"Type annual income"))}}
                    @if($errors->has('income'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('income') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('gnid') ? 'has-error' : '' }}">
                <td>{{ Form::label('gnid', "Guardian's NID", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('gnid', '', array('class'=>'col-md-10 form-control', 'placeholder'=>'Your father/mother NID number'))}}
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
                <td>{{ Form::label('dob', 'Date Of Birth', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::date('dob', '', array('class'=>'col-md-10 form-control', 'placeholder'=>'Type your date of birth'))}}
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
                <td>{{ Form::text('religion', '', array('class'=>'col-md-10 form-control', 'placeholder'=>'Type your religion'))}}
                    @if($errors->has('religion'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('religion') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('phone') ? 'has-error' : '' }}">
                <td>{{ Form::label('phone', 'Phone', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::number('phone', null, array('class'=>'col-md-10 form-control', 'placeholder'=>'Type your phone number', 'id'=>'phone'))}}
                    @if($errors->has('phone'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('phone') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('gname') ? 'has-error' : '' }}">
                <td>{{ Form::label('gname', "Guardian's Name", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('gname', '', array('class'=>'col-md-10 form-control', 'placeholder'=>'Type your guardian name'))}}
                    @if($errors->has('gname'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('gname') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('preschool') ? 'has-error' : '' }}">
                <td>{{ Form::label('preschool', "Previous School Name", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('preschool', '', array('class'=>'col-md-10 form-control', 'placeholder'=>'Type your previous school name'))}}
                    @if($errors->has('preschool'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('preschool') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('status') ? 'has-error' : '' }}">
                <td>{{ Form::label('status', "Status", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('status', '', array('class'=>'col-md-10 form-control', 'placeholder'=>'Type your status'))}}
                    @if($errors->has('status'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('status') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('preaddress') ? 'has-error' : '' }}">
                <td>{{ Form::label('preaddress', 'Present Address*', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::textarea('preaddress', '',['size' => '41x4'], array('class'=>'col-md-6 form-control', 'placeholder'=>' Type your present address'))}}
                    @if($errors->has('preaddress'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('preaddress') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('peraddress') ? 'has-error' : '' }}">
                <td>{{ Form::label('peraddress', 'Permanent Address*', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::textarea('peraddress', '',['size' => '41x4'], array('class'=>'col-md-6 form-control', 'placeholder'=>' Type your permanent address'))}}
                    @if($errors->has('peraddress'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('peraddress') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>

            <tr class="{{ $errors->has('image') ? 'has-error' : '' }}">
                <td>{{ Form::label('image', 'Profile Image', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::file('image', array('class'=>'col-md-10 form-control'))}}

                    @if($errors->has('image'))
                        <span class="help-block" style="display:block">
              <strong>{{ $errors->first('image') }}</strong>
                       </span>
                    @endif
                </td>
            </tr>
            <tr>
            <tr class="{{ $errors->has('quotas') ? 'has-error' : '' }}">
                <td>{{ Form::label('quotas', "Quotas", array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('quotas', '', array('class'=>'col-md-10 form-control'))}}
                    @if($errors->has('quotas'))
                        <span class="help-block" style="display:block">
                  <strong>{{ $errors->first('quotas') }}</strong>
                           </span>
                    @endif
                </td>
            </tr>
                <td></td>
                <td>{{Form::submit('Save', array('class'=>'btn btn-success'))}} </td>
            </tr>

            </table>
            {!! Form::close() !!}
        </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    </body>
</html>