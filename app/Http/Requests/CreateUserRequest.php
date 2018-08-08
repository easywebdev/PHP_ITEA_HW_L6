<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 06.08.18
 * Time: 20:08
 */

namespace App\Http\Requests;


use Illuminate\Http\Request;

class CreateUserRequest extends Request
{
    public function rules()
    {
        return [
            'name' => 'intager',
        ];
    }
}