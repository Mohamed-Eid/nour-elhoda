<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Request
        Message::create($request->all());
        return redirect()->back()->with('success','تم إرسال رسالتك بنجاح');
    }



}
