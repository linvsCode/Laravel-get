<?php

namespace App\Http\Controllers;

use App\Jobs\SendReminderEmail;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function store()
    {
        $users = User::where('id', '<', 29)->get();
        foreach ($users as $user) {
            $this->dispatch(new SendReminderEmail($user));
        }

        return 'Done';
    }
}
