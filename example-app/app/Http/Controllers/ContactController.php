<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Mail\NewReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contacts');
    }
    public function form(CreateContactRequest $request){
        $cont = new NewReport(
            $request->get('email'),
            $request->get('name'),
            $request->get('phone'),
        );
        Mail::to('info@dev.com')->send($cont);

        session()->flash('success', trans('messages.contacts.success'));

        return redirect()
            ->back();
    }
}
