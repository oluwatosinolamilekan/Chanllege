<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class SaveFile
{
    public function run($request)
    {
        DB::beginTransaction();
        $saveFile = new PDF;
        $saveFile->name = $fileName;
        $saveFile->size = $fileName->getSize();
        $saveFile->save();
        DB::commit();
        return $saveFile;
    }
}
