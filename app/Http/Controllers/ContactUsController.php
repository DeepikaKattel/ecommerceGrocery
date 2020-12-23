<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Mail\SendMail;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = ContactUs::all();
        return view('admin.contactList', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new ContactUs();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->subject = request('subject');
        $contact->message = request('message');
        $contact->save();
        $contactsave = $contact->save();
        if ($contactsave) {
            $contactMessage = [
                'title' => 'Contact Message',
                'body' => $contact->name . '' . ' has something to say.'
            ];
            $message = new SendMail($contactMessage,$contact);
            Mail::to('deepika.kattel123@gmail.com')->send($message);
            Alert::success('Thank you', 'We will respond as soon as possible');
            return redirect()->back();
        } else {
            return redirect()->back()->with("error", "There is an error");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactUs::find($id)->delete();
        return redirect('/contact/list');
    }
}
