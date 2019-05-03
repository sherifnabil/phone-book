<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContact;
use App\Http\Requests\UpdateContact;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::paginate(5);
        return view('contact.index', compact('contacts'));
        
    }


    public function create()
    {
        return view('contact.create');
    }


    public function store( StoreContact $request)
    {
        $credentials = $request->validated();
        Contact::create($credentials);
        return redirect()->route('contacts.index');
    }


    public function show(Contact $contact)
    {
        //
    }


    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }


    public function update( UpdateContact $request, Contact $contact)
    {
        $credentials = $request->validated();
        $contact->update($credentials); 
        return redirect()->route('contacts.index');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back();
    }

    public function search(Request $request)
    {
        $contacts = Contact::when($request->search, function ($q) use ($request) {
            return $q->where('name', 'like', '%' . $request->search . '%')
                     ->orWhere('id', 'like', '%' . $request->search . '%')
                    ->orWhere( 'number', 'like', '%' . $request->search . '%');
        })->latest()->paginate(5);
        return view('contact.search', ['contacts' => $contacts]);
    }
}
