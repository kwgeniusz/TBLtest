<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     private $oContact;

    public function __construct()
    {
        $this->middleware('auth');
        $this->oContact = new Contact;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contacts = $this->oContact->getAll($request->filteredOut);
        return view('home', compact('contacts'));
    }
}
