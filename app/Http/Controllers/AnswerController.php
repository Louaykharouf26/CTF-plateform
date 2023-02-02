<?php

namespace App\Http\Controllers;
use App\Models\Challenges as challenges;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function submitAnswer(Request $request, $id)
    {
        // retrieve the challenge from the database
        $challenge = challenges::find($id);
    
        // compare the user's answer to the answer in the database
        if ($request->input('answer') == $challenge->answer) {
            // add the score to the score column
            $challenge->score = $challenge->score + $request->input('score');
    
            // save the updated challenge to the database
            $challenge->save();
    
            // return a success message to the user
            return redirect()->back()->with('success', 'Your answer was correct! The score has been added.');
        } else {
            // return an error message to the user
            return redirect()->back()->with('error', 'Your answer was incorrect. Please try again.');
        }
    }
    
}
