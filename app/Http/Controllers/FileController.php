<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $req) {
        $result = $req->file('file')->store('apiDocs');
        if($result) {
            return response(['res' => 'file upload succeeded'], 200);
        } else {
            return response(['res' => 'file upload failed'], 200);
        }
    }
}
