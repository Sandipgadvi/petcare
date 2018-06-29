<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\EuthForm;
use App\Contact;
use Validator;
class EuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = EuthForm::get();

        return Voyager::view('vendor.voyager.euth-forms.edit-add',compact('data'));

         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = EuthForm::orderBy('created_at','desc')->paginate(2);
        return Voyager::view('vendor.voyager.euth-forms.browse',compact('data'));
  
    }

    public function search(Request $request)
    {
        $data = EuthForm::where('ethu_owner','like','%'.$request->name.'%')->paginate(20);
        if (empty($data)) {
            $msg = ['Not Found'];
            return Voyager::view('vendor.voyager.euth-forms.browse',compact('msg'));
        }
        return Voyager::view('vendor.voyager.euth-forms.browse',compact('data'));
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
       $val = $request->validate([
        'c_name' => 'required',
        'c_date' => 'required',
  'c_address' => 'required',
  'c_phone' => 'required',
  'c_alt_name' => 'required',
  'c_pet_name' => 'required',
  'c_breed' => 'required',
  'c_color' => 'required',
       ]);
        
     EuthForm::create([
            
        'ethu_owner' => $request->c_name,
        'ethu_date' => $request->c_date,
        'ethu_address' => $request->c_address,
        'ethu_phone' => $request->c_phone,
        'ethu_alt_phone' => $request->c_alt_name,
        'ethu_pet_name' => $request->c_pet_name,
        'ethu_breed' => $request->c_breed,
        'ethu_sex' => $request->sex,
        'ethu_color' => $request->c_color,
        'note' => $request->note,
        'agree' => $request->agree,
        'ethu_case_no' => random_int(1,1000),

     ]);

     $contact_name=$request->c_name;

     $contactNo=Contact::where('contact_name','=',$contact_name)->get();
     if(isset($contactNo) && !empty($contactNo))
         {
           return back();
         }
    
        Contact::create([
            'contact_name' => $request->c_name,
            'contact_number' => $request->c_phone,
    
         ]);     
     
     
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data=EuthForm::find($id);
        return Voyager::view('vendor.voyager.euth-forms.edit',compact('data'));
        
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
        $data=EuthForm::find($id);
        $datareq = $request->all();

        $data->ethu_owner = $request->c_name;
        
        $data->ethu_date = $request->c_date;
        $data->ethu_address = $request->c_address;
        $data->ethu_phone = $request->c_phone;
        $data->ethu_alt_phone = $request->c_alt_name;
        $data->ethu_pet_name = $request->c_pet_name;
        $data->ethu_breed = $request->c_breed;
        $data->ethu_sex = $request->sex;
        $data->ethu_color = $request->c_color;
        $data->note = $request->note;
        $data->agree = $request->agree;

        $data->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
