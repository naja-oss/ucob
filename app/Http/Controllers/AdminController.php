<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function akun()
    {
        $data = User::findOrFail(auth()->user()->id);
        return view('admin.admin', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = user::findOrFail($id);
        return view('admin.edit_admin');
    }

}
