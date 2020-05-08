<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
        Contact::create( $request->except(['_token']));
        return redirect('/');
    }
    public function update($contact_id,Request $request)
    {

        $validator = Validator::make($request->all(), Contact::rules($contact_id));

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        Contact::find($contact_id)
            ->update(
                $request->except(['_token'])
            );
        return redirect('/');
    }



}
