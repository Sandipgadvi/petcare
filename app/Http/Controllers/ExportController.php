<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ConsentForm;

use App\EuthForm;

use App\Contact;

use Excel;

use Illuminate\Support\Facades\Input;


class ExportController extends Controller
{
    public function export($type){
        $data = ConsentForm::get()->toArray();
        
        $el = \Excel::create('Consent_form', function($excel) use ($data) {

            $excel->sheet('sheet name', function($sheet) use ($data)

            {

                $sheet->fromArray($data);

            });

        })->download($type);

        return $el;
    }

    public function exporteuth($type){
        $data = EuthForm::get()->toArray();
        
        $el = \Excel::create('Euth_form', function($excel) use ($data) {

            $excel->sheet('sheet name', function($sheet) use ($data)

            {

                $sheet->fromArray($data);

            });

        })->download($type);

        return $el;
    }

  public function import(Request $request){

     $file = $request->file('file');
     $result = Excel::load($file, function($reader){
        $reader->each(function($sheet){
              ConsentForm::firstOrCreate($sheet->toArray());
        });
     } );
   return back();
  }

  public function importeuth(Request $request){

    $file = $request->file('file');
    $result = Excel::load($file, function($reader){
       $reader->each(function($sheet){
             EuthForm::firstOrCreate($sheet->toArray());
       });
    } );
  return back();
 }


 public function importcontact(Request $request){

    $file = $request->file('file');
    $result = Excel::load($file, function($reader){
       $reader->each(function($sheet){
             Contact::firstOrCreate($sheet->toArray());
       });
    } );
  return back();
 }


}

