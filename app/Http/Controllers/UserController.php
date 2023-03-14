<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // send Email

    public function emailView($id) {
        $data = User::find($id);
        return view('users.send_email_view', compact('data'));
    }

    // send email to each users

    public function storeSingleEmail(Request $request, $id)
    {

        $user = User::find($id);
        $details = array();

        $details['greeting'] = $request->greeting;
        $details['body'] = $request->body;
        $details['actiontext'] = $request->actiontext;
        $details['actionurl'] = $request->actionurl;
        $details['endtext'] = $request->endtext;

        Notification::send($user, new SendEmailNotification($details));

        return redirect()->to('/users');
    }


    public function emailViewAll()
    {
        return view('users.send_email_all');
    }

    public function storeAllUserEmail(Request $request)
    {

        $users = User::all();
        $details = array();
        $details['greeting'] = $request->greeting;
        $details['body'] = $request->body;
        $details['actiontext'] = $request->actiontext;
        $details['actionurl'] = $request->actionurl;
        $details['endtext'] = $request->endtext;

        foreach($users as $user) {
            Notification::send($user, new SendEmailNotification($details));
        }



        return redirect()->to('/users');
    }
}
