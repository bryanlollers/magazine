<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function getDownload(Request $request){
        if($request ==  )
        $file = public_path()."/download/nrm-third-issue.pdf";
        $headers = array (
            'Content-Type: application/pdf',
        );
        return response()->download($file,'nrm-third-issue.pdf',$headers);
    }
}
