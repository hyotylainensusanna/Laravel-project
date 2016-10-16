<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

use Illuminate\Support\Facades\Response;

class UserApiController extends Controller
{
    public function index()
    {
        $users = User::all();
        return Response::json(array(
            'posts' => $users
        ));
    }

    public function show($id)
    {
        $user = User::find($id);
        return Response::json(array(
            'post' => $user
        ));
    }
}
