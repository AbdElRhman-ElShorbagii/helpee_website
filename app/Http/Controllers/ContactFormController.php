<?php

namespace App\Http\Controllers;

use App\Model\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = ContactForm::all();
        return view('messages.index', compact('messages'));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactForm.create');
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
            'name'=>'required|max:255',
            'email'=> 'required',
            'message' => 'required'
          ]);
          $contact = new contactForm([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'message'=> $request->get('message')
          ]);
          $contact->save();
          return redirect('')->with('success', 'Message sent successfully');

          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $messages = ContactForm::find($id);
        $messages->delete();
   
        return redirect('/messages');
    }
}
