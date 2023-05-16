<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function uploadFile(Request $request)
    {
        $files = [];
        for ($i=1; $i<=6; $i++) {
            $file = $request->file("file_$i");
            if ($file) {
                $fileName = $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');
                $files["file_$i"] = $filePath;
            }
        }

        $row = new File();
        $row->fill($files);
        $row->idReview=$request->input('idReview');
        $row->save();
        return response()->json(['success' => false, 'message' => 'No files uploaded.']);
    }
}
