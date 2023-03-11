<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ExtractJobOfferController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function extractJobOffer(Request $request)
    {
        $jobOffer = $request->jobOffer;

//        $prompt = "Extract the requirements for this job offer as a list: ";
//        $prompt .= $jobOffer;

       // $prompt = "Schreibe ein Kochrezept basierend auf folgenden Zutaten: " . $jobOffer;
            //. "\r\nHorror-Geschichte in zwei Sätzen:";

        $prompt = $jobOffer;
        $prompt .= "\r\n" . "Tl;dr";

       // $client = OpenAI::client(env("OPEN_AI_API_KEY"));

  /*       $result = $client->completions()->create([
            'model' => 'text-davinci-003', // The most expensive one, but the best.
            'prompt' => $prompt,
            'max_tokens' => 500, // A token is a basically a word.
        ]); */

        dd(OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
            'max_tokens' => 500,
        ]));

    }
}
