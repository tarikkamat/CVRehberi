<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $validate = $request->validate([
            'file' => 'required|mimes:pdf|max:2048'
        ]);

        $text = Pdf::getText($validate['file']);

        return dd($text);

    }
}
