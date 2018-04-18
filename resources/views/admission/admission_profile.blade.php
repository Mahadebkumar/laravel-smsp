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
            <div class="col-md-9 heading content">
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
                        <h3 class="h3">Personal Information:</h3>
                        <div id="height-10"></div>
                        <div class="row">
                            <div class="col-md-10">
                                <label><span class="span">Name(English):</span> {{$info->sname}}</label><br>

                                <label><span class="span">Name(Bangla):</span> {{$info->sbname}}</label><br>

                                <label><span class="span">Class:</span> {{$info->class}}</label><br>

                                <label><span class="span">Year:</span> {{$info->year}}</label><br>

                                <label><span class="span">Father's Name:</span> {{$info->fname}}</label><br>

                                <label><span class="span">Mother's Name:</span> {{$info->mname}}</label><br>

                                <label><span class="span">Father's Occupation:</span> {{$info->foccupation}}</label><br>

                                <label><span class="span">Mother's Occupation:</span> {{$info->moccupation}}</label><br>

                                <label><span class="span">Gadian's NID:</span> {{$info->gnid}}</label><br>

                                <label><span class="span">Annual Income:</span> {{$info->income}}</label><br>
                                <label><span class="span">Gender:</span> {{$info->gender}}</label><br>

                                <label><span class="span">Date of birth:</span> {{$info->dob}}</label><br>

                                <label><span class="span">Blood Group:</span> {{$info->blood}}</label><br>

                                <label><span class="span">Religion:</span> {{$info->religion}}</label><br>

                                <label><span class="span">Gardian's Phone:</span> {{$info->phone}}</label><br>

                                <label><span class="span">Guardian Name:</span> {{$info->gname}}</label><br>

                                <label><span class="span">Preschool:</span> {{$info->preschool}}</label><br>

                                <label><span class="span">Present Address:</span> {{$info->preaddress}}</label><br>

                                <label><span class="span">Permanent Address:</span> {{$info->preaddress}}</label><br>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <img class="img img-responsive" style="height:140px; width:127px;" src="../public/files/admission/{{$info->image}}"/>Picture
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