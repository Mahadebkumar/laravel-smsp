<?php

namespace App\Http\Controllers;

use App\admissionModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use file;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=admissionModel::where('status', '=', 0)->paginate(5);
        return view('admission.registerd_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admission.admit');
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
            'class'=>'required',
            'year'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'foccupation'=>'required',
            'moccupation'=>'required',
            'income'=>'required',
            'gnid'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'blood'=>'required',
            'religion'=>'required',
            'phone'=>'required|unique:registration',
            'preschool'=>'required',
            'preaddress'=>'required',
            'peraddress'=>'required',
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
            $file->move('public/files/admission',$fileName);
            $input['image']=$fileName;
        }

        $data=admissionModel::create($input);
        return redirect('/admission');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info=admissionModel::findOrFail($id);
        return view('admission.admission_profile', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $info=admissionModel::findOrFail($id);
//        ret

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info=admissionModel::findOrFail($id);
        $info->delete($info);
        return redirect('/admission');
    }

    public function approval($id)
    {
        DB::table('admission')->where('id','=',$id)->update(['status'=>1]);
        return redirect()->back()->with('success', 'Approve successfully');
    }

    public function approve()
    {
        $data=admissionModel::where('status', '=', 1)->paginate(5);
        return view('admission.admission_approve', compact('data'));
    }
}
