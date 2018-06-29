<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ConsentForm;

use App\EuthForm;

use Excel;


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
}
