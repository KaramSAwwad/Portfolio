<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{

    public function downloadFile(){
        $file = public_path()."/MyCv/Karam_Awwad_CV.pdf";
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, 'Karam_Awwad_CV.pdf',$headers);

    }

}
