<?php

namespace App\Http\Controllers;

use App\Models\GeneralInfo;
use App\Models\Services;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ApplyMailController extends Controller
{

    public function html_email(Request $request)
    {
        //Fetch data from General setting
        $to_email = GeneralInfo::first();
        $sitename = $to_email->site_name;
        $email = $to_email->email;
        //fetch data from user email
        $from_email = $request->email;
       

        $data = array('name' => $request->name, 'email' => $request->email, 'phone' => $request->phone);

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');

           
            $fileName = $file->getClientOriginalName();
            $fileMimeType = $file->getMimeType();

            Mail::send('applymail', $data, function ($message) use ($sitename, $email, $from_email, $file, $fileName, $fileMimeType) {
                $message->to($email, $sitename)->subject('Baganbari Mail');
                $message->from($from_email, $sitename);

               
                $message->attach($file, [
                    'as' => $fileName,
                    'mime' => $fileMimeType,
                ]);
            });
        } else {
       
            Mail::send('applymail', $data, function ($message) use ($sitename, $email, $from_email) {
                $message->to($email, $sitename)->subject('Baganbari Mail');
                $message->from($from_email, $sitename);
            });
        }
    
        Toastr::success('Mail Sent Successfully', 'success');
        return back();
    }
}