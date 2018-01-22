<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
class QuestionController extends Controller
{

    public function store(Request $request){
        $requestData = $request->all();
        Question::create ($requestData);
        return  redirect()->route('faq');

    }

    public function ajoutQuestion(){
        return view('/site/ajoutQuestion');
    }

    public function afficherFaq(){
        $collection  = DB::table('question')
            ->latest('dateRedaction')
            ->get();
        $attributs = array();

        foreach ($collection as $question) {
            $attributs[] = [$question->id, $question->question, $question->reponse, $question->favori, $question->dateRedaction];
        }

        return view('/site/faq')->with('attributs', $attributs);
    }
}
