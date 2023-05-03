<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\PdfToText\Pdf;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $validate = $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
            'job' => 'string|max:50'
        ]);

        $text = Pdf::getText($validate['file']);
        $job = $request->$validate['job'];

        $suggestion = "Mesleğim: $job\n\n Özgeçmişim: $text\n\n Özgeçmişimi analiz edip eksiklerimi ve hatalarımı maddeler halinde paylaşır mısın?";

        return dd($suggestion);

    }
}
