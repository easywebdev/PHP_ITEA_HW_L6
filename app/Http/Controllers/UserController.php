<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 06.08.18
 * Time: 19:57
 */

namespace App\Http\Controllers;


use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request) {
        dd($request->name);
    }
}