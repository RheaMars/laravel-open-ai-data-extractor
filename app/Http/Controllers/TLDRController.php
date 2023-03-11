<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class TLDRController extends Controller
{
    public function index()
    {
        return view("welcome")
            ->with('summary', '')
            ->with('longText', '');
    }

    public function requestSummary(Request $request)
    {
        $longText = $request->longText;

        $prompt = $longText;
        $prompt .= "\r\n" . "Tl;dr";

        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
            'max_tokens' => 500,
        ]);

        $summary = $result['choices'][0]['text'];
        $summary = trim($summary, ": ");

        return view('welcome')
            ->with('summary', $summary)
            ->with('longText', $longText);

    }
}
