<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContact;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResource;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::paginate(5);
        return  ContactResource::collection($contacts);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $contact =  new Contact;
        $contact->name = $request->name;
        $contact->number = $request->number;
        $contact->save();
        return response(['data' => new ContactResource($contact)], Response::HTTP_CREATED);
    }


    public function show(Contact $contact)
    {
        return new ContactResource($contact);
    }



    public function edit(Contact $contact)
    {
        //
    }


    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());

        return response([
            'data'  =>  new ContactResource($contact)
        ], Response::HTTP_CREATED);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
