<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'postcode', 'address', 'building_name', 'content']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'postcode', 'address', 'building_name', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
