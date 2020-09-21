<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Questions::paginate(10);
        return view('questions', compact('questions'));
    }


    public function output(Request $request)
    {
        $questions = $request->selectedQuestions;
        return view('output', compact('questions'));
    }


}
