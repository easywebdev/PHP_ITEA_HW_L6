<?php

namespace App\Http\Controllers;

use App\Http\Models\MUsers;
use Illuminate\Http\Request;


/**
 * Class CUsers
 * @package App\Http\Controllers
 */
class CUsers extends Controller
{
    /**
     * @var MUsers
     */
    private $model;

    /**
     * CUsers constructor.
     * @param MUsers $model
     */
    public function __construct(MUsers $model)
    {
        $this->model = $model;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUsers()
    {
        $users = $this->model->selectUsers();
        $usersName = [];

        foreach ($users as $user) {
            $usersName[$user->id] = $user->name;
        }

        return view('users', [
            'users' => $usersName
        ]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUser(int $id)
    {
        $user = $this->model->selectUser($id);

        $userData['name'] = $user[0]->name;
        $userData['age'] = $user[0]->age;
        $userData['job'] = $user[0]->job;

        return view('user', [
            'user' => $userData
        ]);
    }

    /**
     * @param Request $request
     */
    public function insertUser(Request $request)
    {
        $this->model->insertUser($request->post());
    }

    /**
     * @param Request $request
     * @param int $id
     */
    public function updateUser(Request $request, int $id)
    {
        $this->model->updateUser($request->post(), $id);
    }

    /**
     * @param $id
     */
    public function delUser($id)
    {
        $this->model->delUser($id);
    }
}