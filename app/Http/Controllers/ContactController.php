<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', ['contacts' => $contacts]);
    }

    public function show(Contact $id)
    {
        return view('contacts.show', ['contact' => $id]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());
        return redirect('/');
    }



}
