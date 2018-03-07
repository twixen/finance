<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller {

    public function index() {
        $contacts = Contact::all();
        return view('contacts')->with('contacts', $contacts);
    }

    public function create() {
        return view('contact_add');
    }

    public function store(Request $request) {
        $inputs = $request->only('name', 'surname', 'email', 'phone', 'birthday');
        $contact = new Contact();
        $contact->name = $inputs['name'];
        $contact->surname = $inputs['surname'];
        $contact->email = $inputs['email'];
        $contact->phone = $inputs['phone'];
        $contact->birthday = $inputs['birthday'];
        $contact->save();
        return redirect()->route('index');
    }

    public function show($contact) {

    }

    public function edit($contact) {
        return view('contact_edit')->with('contact', $contact);
    }

    public function update(Request $request, $contact) {
        $inputs = $request->only('name', 'surname', 'email', 'phone', 'birthday');
        $contact->name = $inputs['name'];
        $contact->surname = $inputs['surname'];
        $contact->email = $inputs['email'];
        $contact->phone = $inputs['phone'];
        $contact->birthday = $inputs['birthday'];
        $contact->save();
        return redirect()->route('index');
    }

    public function destroy($contact) {
        $contact->delete();
        return redirect()->route('index');
    }
}
