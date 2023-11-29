<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function register(): string
    {
        helper(['form']);
        return view('register');
    }

    public function userRegister()
    {
        $data = [];
        helper(['form']);
        $validation = \config\Services::validation();

        if (! $this->request->is('post')) {
            return view('register');
        }

        $rules = [
            'first'=> 'required|min_length[3]|max_length[20]',
            'last'=> 'required|min_length[3]|max_length[20]',
            'phone'=> 'required|min_length[6]|max_length[20]',
            'email'=> 'required|max_length[254]|valid_email|is_unique[user.email]',
            'password'=> 'required|min_length[5]|max_length[100]',
            'gender'=> 'required',
        ];
        if(! $this->validate($rules)){
            $data['validation'] = $this->validator;
        } else {
            echo 111;
            exit;
        }


        return view('register', $data);
    }
}
