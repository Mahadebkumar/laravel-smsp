@extends('layouts.master')
@section('title', 'Student Profile')

@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/profile.css')}}" />
</head>
<body>




<div class="container-fluid">
    <div class="row ">
        <div class="col-md-1"></div>
        <div class="col-md-10 heading content">
            <h2>Faridpur Zilla School,Faridpur Bangladesh</h2>
            <h2>ফরিদপুর জিলা স্কুল, ফরিদপুর</h2>
            <h5>Established:1866</h5>
            <h4>{{$info->sname}}'s Information</h4>
            {{--<div class="row">--}}
            {{--<div class="col-md-4">শিক্ষা</div>--}}
            {{--<div class="col-md-4">শান্তি</div>--}}
            {{--<div class="col-md-4">প্রগতি</div>--}}
            {{--</div>--}}
            <div class="col-md-12 line"></div>
            <div class="row">
                <div class="col-md-9 accademy_section">
                    <div id="height-30"></div>
                    <h3 class="h3">Accademic Information:</h3>
                    <div id="height-10"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <label><span class="span">Name(English):</span>{{$info->sname}}</label><br>
                        </div>
                        <div class="col-md-6">
                            <label><span class="span">Name(Bangla):</span>{{$info->sbname}}</label><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label><span class="span">Class:</span>{{$info->class}}</label><br>
                        </div>
                        <div class="col-md-6">
                            <label><span class="span">Section:</span>{{$info->section}}</label><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label><span class="span">Roll:</span>{{$info->roll}}</label><br>
                        </div>
                        <div class="col-md-6">
                            <label><span class="span">Registration:</span>{{$info->reg}}</label><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label><span class="span">Session:</span>{{$info->session}}</label><br>
                        </div>

                        <div class="col-md-6">
                            <label><span class="span">Student Id:</span>{{$info->sid}}</label><br>
                        </div><div class="col-md-6">
                            <label><span class="span">Religion:</span>{{$info->religion}}</label><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img class="img img-responsive" style="height:140px; width:127px;" src="../public/files/student/{{$info->image}}"/>
                </div>
            </div>
            <div class="other-setion">
                <div class="row">
                    <div class="col-md-12">
                        <div id="height-30"></div>
                        <h3 class="h3" style="text-align: left;">Other's Information:</h3>
                        <div id="height-20"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><span class="span">Gender:</span>{{$info->gender}}</label><br>
                    </div>
                    <div class="col-md-4">
                        <label><span class="span">Blood Group:</span>{{$info->blood}}</label><br>
                    </div>
                    <div class="col-md-4">
                        <label><span class="span">Date of birth:</span>{{$info->dob}}</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label><span class="span">Father's Nmae:</span>{{$info->fname}}</label><br>
                    </div>
                    <div class="col-md-4">
                        <label><span class="span">Mother's Name:</span>{{$info->mname}}</label><br>
                    </div>
                    <div class="col-md-4">
                        <label><span class="span">Father's Number:</span>{{$info->phone}}</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><span class="span">Guardian Name:</span>{{$info->gname}}</label><br>
                    </div>
                    <div class="col-md-4">
                        <label><span class="span">Grardian Nid:</span>{{$info->gnid}}</label><br>
                    </div>
                    <div class="col-md-4">
                        <label><span class="span">Address:</span>{{$info->address}}</label><br>
                    </div>
                </div>
            </div>
            <footer><p>Developed By https://lion-soft.net</p></footer>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>


</body>
</html>
@endsection