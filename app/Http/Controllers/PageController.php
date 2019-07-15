<?php

namespace App\Http\Controllers;

use App\Page;
use App\Comment as UserComment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function aboutUs()
    {
        $UserComments = UserComment::orderBy('created_at','desc')->get();
        return view('pages.about', compact('UserComments'));
    }

    public function contactUs()
    {
        return view('pages.contact');
    }
    public function contactInfo(Request $request)
    {
        $formInput = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required|min:5'
        ]);
        Page::create($formInput);
        return redirect()->back()->with('success', 'Information Submited Successfull...');
    }
    public function comment(Request $request)
    {
        $formInput = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required|min:5'
        ]);
        UserComment::create($formInput);
        return redirect()->back()->with('success', 'Comment Submited Successfull...');
    }
}
