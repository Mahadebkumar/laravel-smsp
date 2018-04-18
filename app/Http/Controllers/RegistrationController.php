<?php

namespace App\Http\Controllers;

use App\registrationModel;
use Illuminate\Http\Request;
use Validator;
use file;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=registrationModel::paginate(5);
        return view('info.student_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('info.info_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        $validator=Validator::make($request->all(),[
            'sname'=>'required',
            'sbname'=>'required',
            'sid'=>'required',
            'roll'=>'required',
            'reg'=>'required',
            'class'=>'required',
            'section'=>'required',
            'session'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'gnid'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'blood'=>'required',
            'religion'=>'required',
            'phone'=>'required|unique:registration',
            'gname'=>'required',
            'address'=>'required',
            'image'=> 'required|mimes:jpeg,jpg,png,JPG'
        ]);


        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files/student',$fileName);
            $input['image']=$fileName;
        }

        $data=registrationModel::create($input);
        return redirect('info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info=registrationModel::findOrFail($id);
        return view('info.student_info', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info=registrationModel::findOrFail($id);
        return view('info.info_edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=registrationModel::findOrFail($id);
        $input=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files/student',$fileName);
            $input['image']=$fileName;
        }
        $data->update($input);
        return redirect('/info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=registrationModel::findOrFail($id);
        $data->delete($data);
        return redirect('/info');
    }
}
