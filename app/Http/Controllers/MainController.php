<?php

namespace App\Http\Controllers;

use Request;
use App\Users;

class MainController extends Controller
{
    public function getIndex() {
        $data['users'] = Users::paginate(6);

        return view('home', $data);
    }

    public function postUsers() {
        Users::insert([
            'name' => Request::get('name'),
            'email' => Request::get('email'),
            'address' => Request::get('address'),
            'user_id' => md5(Request::get('email').Request::get('address').Request::get('phone')),
            'phone' => Request::get('phone'),
        ]);
        return redirect('/');
    }
}
