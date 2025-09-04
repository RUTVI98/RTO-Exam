<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionBank;
use App\Models\Sign;

class QuestionbankController extends Controller
{
    public function view()
    {

        return view('web.questionbank.index');
    }

    public function loadQuestions(Request $request)
    {

        $offset = $request->get('offset', 0);
        $lang = $request->get('lang', 'eng'); // default English


        $questions = QuestionBank::where('lang', $lang)
            ->orderBy('id', 'asc')
            ->skip($offset)
            ->take(6)
            ->get();

        $html = view('web.questionbank.data', [
            'questions' => $questions,
            'offset' => $offset
        ])->render();

        return response()->json([
            'html' => $html,
            'count' => $questions->count()
        ]);
    }

    public function loadSigns(Request $request)
    {
        $offset = $request->get('offset', 0);
        $lang = $request->get('lang', 'eng');

        // Fetch next set of signs
        $signs = Sign::where('lang', $lang)
            ->orderBy('id', 'asc')
            ->skip($offset)
            ->take(8)
            ->get();

        // Render partial view
        $html = view('web.questionbank.signdata', [
            'signs' => $signs,
            'offset' => $offset
        ])->render();

        return response()->json([
            'count' => $signs->count(),
            'html' => $html
        ]);
    }


}
