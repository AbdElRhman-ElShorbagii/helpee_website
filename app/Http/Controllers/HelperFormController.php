<?php

namespace App\Http\Controllers;

use App\Model\HelperForm;
use Illuminate\Http\Request;

class HelperFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helpers = HelperForm::all();
        return view('helpers.index',compact('helpers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'fname'=>'required|max:255',
            'lname'=> 'required|max:255',
            'gender' => 'required',
            'job' => 'required|max:255',
            'email' => 'required|max:255',
            'mobileNumber' => 'required|max:255',
            'country' => 'required|max:255',
            'city' => 'required|max:255',
            'district' => 'required|max:255',
          ]);
          $helper = new helperForm([
            'fname' => $request->get('fname'),
            'lname'=> $request->get('lname'),
            'gender'=> $request->get('gender'),
            'job'=> $request->get('job'),
            'email'=> $request->get('email'),
            'mobileNumber'=> $request->get('mobileNumber'),
            'country'=> $request->get('country'),
            'city'=> $request->get('city'),
            'district'=> $request->get('district'),
          ]);
          $helper->save();
          return redirect('/helper')->with('success', 'The Form Submitted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\HelperForm  $helperForm
     * @return \Illuminate\Http\Response
     */
    public function show(HelperForm $helperForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\HelperForm  $helperForm
     * @return \Illuminate\Http\Response
     */
    public function edit(HelperForm $helperForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\HelperForm  $helperForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HelperForm $helperForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\HelperForm  $helperForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $helpers = HelperForm::find($id);
        $helpers->delete();
   
        return redirect('/helpers');
    }
}
