<?php

namespace App\Http\Controllers;

use App\Services\SaveFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PDFController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'mimes:pdf',
        ]);
        if ($validation->fails()) {
            return response()->json(['message' => $validation->messages()->first()], 422);
        }
        $fileName = $request->file;
        if($fileName = 'Proposal'){
            // check if the file  exist  before.. if so just update
            $checkFileName = File::where('name',$fileName)->first();
            // if file exist check the size
            if($checkFileName){
                $fileSize = $checkFileName->getSize();
                // update existing or just leave it as it was...
            }else{
                // store the file...
                $saveFile = (new SaveFile())->run($request);
            }
            // else create new one..
        }else{
            throw new \Exception("File Should be Ignore");
        }

    }
}
