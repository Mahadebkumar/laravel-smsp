@extends('layouts.master')

@section('title', 'Add Mark')
@section('content')
    {!! Form::open(array('route'=>'mark.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
            <u><h1 style="text-align: center; margin-bottom: 20px;">Add Mark</h1></u>
            @foreach($info as $student)
                    <input type="hidden" name="sid" value="{{$student->sid}}">
                    <div class="col-md-5">
                       Name : {{$student->sname}}
                    </div>
                    <div class="col-md-3">
                       Roll : {{$student->roll}}
                    </div>
                    <div class="col-md-2">
                       Class : {{$student->class}}
                    </div>
                    <div class="col-md-2">
                       Section : {{$student->section}}
                    </div>
            @endforeach
        <table class="table table-hover">
            <tr>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Full Mark</th>
                <th>Absoulte Mark</th>
            </tr>
            @foreach($subjects as $subject)
                <tr>
                    <input type="hidden" name="sub_code[]" value="{{$subject->sub_code}}">
                    <td>{{$subject->sub_name}}</td>
                    <td>{{$subject->fmark}}</td>
                    <td><input class="form-control" type="text" name="mark[]"></td>
                    {{--<td>{{ Form::number('mark ', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type mark'))}}--}}
                        {{--@if($errors->has('mark'))--}}
                            {{--<span class="help-block" style="display:block">--}}
                          {{--<strong>{{ $errors->first('mark') }}</strong>--}}
                                   {{--</span>--}}
                        {{--@endif--}}
                    {{--</td>--}}
                </tr>
            @endforeach
            
            <tr>

                <td>Year</td>
                <td>
                    <input style="width:100px;" class="form-control" type="text" name="year">
                </td>
                <td>
                    <select class="form-control" name="examid" id="">
                        <option >Select Exam*</option>
                        <option value="1">Half yearly</option>
                        <option value="2">Final</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    {{Form::submit('Save', array('class'=>'btn btn-success'))}}
    {!! Form::close() !!}
@endsection