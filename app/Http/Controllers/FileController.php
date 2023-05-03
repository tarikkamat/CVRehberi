<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Spatie\PdfToText\Pdf;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
            'job' => 'string|max:50'
        ]);

        $text = Pdf::getText($request->file);
        $job = $request->job;

        $search = "Mesleğim: $job\n\n Özgeçmişim: $text\n\n Özgeçmişimi analiz edip eksiklerimi ve hatalarımı maddeler halinde paylaşır mısın?";

        $data = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.env('OPENAI_API_KEY'),
        ])
            ->post("https://api.openai.com/v1/chat/completions", [
                "model" => "gpt-3.5-turbo",
                'messages' => [
                    [
                        "role" => "user",
                        "content" => $search
                    ]
                ],
                'temperature' => 0.5,
                "max_tokens" => 200,
                "top_p" => 1.0,
                "frequency_penalty" => 0.52,
                "presence_penalty" => 0.5,
                "stop" => ["11."],
            ])
            ->json();

        return response()->json($data, 200, array(), JSON_PRETTY_PRINT);

    }
}
