<?php

namespace App\Controllers;

use App\Models\UserModel;


class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
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
            'email'=> 'required|max_length[254]|valid_email|is_unique[users.email]',
            'password'=> 'required|min_length[5]|max_length[100]',
            'gender'=> 'required',
        ];
        if(! $this->validate($rules)){
            $data['validation'] = $this->validator;
        } else {
            $user = new UserModel();
            $newData = [
                'first_name' => $this->request->getVar('first'),
                'last_name'=> $this->request->getVar('last'),
                'gender' => $this->request->getVar('gender'),
                'email'=> $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'password' => $this->request->getVar('password'),
            ];
            
            if($user->save($newData)){
                return redirect()->to('register')->with('success','Successfully Saved');

            }

        }


        return view('register', $data);
    }
}
