<?php

namespace App\Http\Controllers;

use App\Model\SubscribeForm;
use Illuminate\Http\Request;

class SubscribeFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribes = SubscribeForm::all();
        return view('subscribe.index', compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=> 'required',
          ]);
          $subscribe = new subscribeForm([
            'email'=> $request->get('email'),
          ]);
          $subscribe->save();
          return redirect('')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SubscribeForm  $subscribeForm
     * @return \Illuminate\Http\Response
     */
    public function show(SubscribeForm $subscribeForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SubscribeForm  $subscribeForm
     * @return \Illuminate\Http\Response
     */
    public function edit(SubscribeForm $subscribeForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SubscribeForm  $subscribeForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubscribeForm $subscribeForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SubscribeForm  $subscribeForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Subscribes = SubscribeForm::find($id);
        $Subscribes->delete();
   
        return redirect('/subscribers');
    }
}
