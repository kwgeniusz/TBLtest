<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class ContactController extends Controller
{
      private $oContact;

    public function __construct()
    {
        $this->middleware('auth');
        $this->oContact = new Contact;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactNew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'firstName' => 'required|string|max:60',
           'lastName' => 'required|string|max:60',
           'email' => 'required|unique:contact,email',
           'contactNumber' => 'required',
          ]);

      $contact = $this->oContact->insertContact($request->all());
      
   
            
        $notification = array(
            'message'    => 'Contact Created'.$contact->clientCode,
            'alert-type' => 'success',
        );

        return redirect()->route('home')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($contactId)
    {

          // $countrys = Country::all();
        $contact = $this->oContact->findById($contactId);

        return view('contactNew', compact('contact'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($contactId,Request $request)
    {
         $this->oContact->updateContact($contactId,$request->all());

        $notification = array(
            'message'    => 'Contact Modified',
            'alert-type' => 'success',
        );
        return redirect()->route('home')
            ->with($notification);
    }

  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($contactId)
    {

       $rs = $this->oContact->deleteContact($contactId);

         $notification = array(
            'alert-type' => 'info',
            'message'    => 'Contact Deleted',
        );

        return redirect()->route('home')->with($notification);
    }
}
