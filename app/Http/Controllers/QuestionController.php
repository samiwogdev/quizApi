<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    public function fetchInsert()
    {
        $response = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey' => 'KbkAi729jcNB3FCfqWa1SoT8adSYoyTDtFsiuAUW',
            'limit' => 10,
        ]);

        $questionBanks = json_decode($response->body());
        foreach ($questionBanks as $questionBank){
            $question = new Question();
            //setting model field
            $question->question = $questionBank->question;
            $question->answer_a = $questionBank->answers->answer_a;
            $question->answer_b = $questionBank->answers->answer_b;
            $question->answer_c = $questionBank->answers->answer_c;
            $question->save();
        }
        return "Question save successfully";
    }

    public function show()
    {
        $data['questions'] = Question::all();
        return view('welcome', $data);
    }
}
