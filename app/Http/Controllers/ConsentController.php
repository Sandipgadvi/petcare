<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\ConsentForm;
use App\Contact;
use Validator;
class ConsentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ConsentForm::get();

        return Voyager::view('vendor.voyager.consent-forms.edit-add',compact('data'));

         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ConsentForm::orderBy('created_at','desc')->paginate(1);
        return Voyager::view('vendor.voyager.consent-forms.browse',compact('data'));
  
    }

    public function search(Request $request)
    {
        $data = ConsentForm::where('consent_owner','like','%'.$request->name.'%')->paginate(20);
        if (empty($data)) {
            $msg = ['Not Found'];
            return Voyager::view('vendor.voyager.consent-forms.browse',compact('msg'));
        }
        return Voyager::view('vendor.voyager.consent-forms.browse',compact('data'));
  
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
        
     ConsentForm::create([
            
        'consent_owner' => $request->c_name,
        'consent_date' => $request->c_date,
        'consent_address' => $request->c_address,
        'consent_phone' => $request->c_phone,
        'consent_alt_phone' => $request->c_alt_name,
        'consent_pet_name' => $request->c_pet_name,
        'consent_breed' => $request->c_breed,
        'consent_sex' => $request->sex,
        'consent_color' => $request->c_color,
        'consent_primary_complaints' => $request->c_complaints,
        'consent_specify_complaints' => $request->c_spl_complaints,
        'consent_condition' => $request->c_condition,
        'consent_medication' => $request->c_medication,
        'note' => $request->note,
        'agree' => $request->agree,
        'consent_case_no' => random_int(1,1000),

     ]);

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

         $data=ConsentForm::find($id);

        return view('vendor.voyager.consent-forms.edit',compact('data'));
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
           $data=ConsentForm::find($id);
           $datareq = $request->all();

           $data->consent_owner = $request->c_name;
           
           $data->consent_date = $request->c_date;
           $data->consent_address = $request->c_address;
           $data->consent_phone = $request->c_phone;
           $data->consent_alt_phone = $request->c_alt_name;
           $data->consent_pet_name = $request->c_pet_name;
           $data->consent_breed = $request->c_breed;
           $data->consent_sex = $request->sex;
           $data->consent_color = $request->c_color;
           $data->consent_primary_complaints = $request->c_complaints;
           $data->consent_specify_complaints = $request->c_spl_complaints;
           $data->consent_condition = $request->c_condition;
           $data->consent_medication = $request->c_medication;
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
