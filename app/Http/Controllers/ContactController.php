<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(1);

        return view('contact.index', ['contacts' => $contacts] );

	}



}
