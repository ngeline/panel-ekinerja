<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class UsersController extends BaseController
{
    protected $users;

    public function __construct()
    {
        helper(['form', 'url', 'validation', 'session', 'text']);
        $this->users = new UsersModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kelola Users',
            'users' => $this->users->getDetails()
        ];

        return view('mandor/users/index', $data);
    }
}
