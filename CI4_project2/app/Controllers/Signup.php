<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\Response;
use IonAuth\IonAuth;

class Signup extends Controller
{
    public function signup()
    {
        $request = Request::instance();

        $data = [
            'username' => $request->getPost('username'),
            'email' => $request->getPost('email'),
            'password' => $request->getPost('password'),
            'password_confirm' => $request->getPost('password_confirm'),
        ];

        $ionAuth = new IonAuth();

        if ($ionAuth->register($data)) {
            return redirect()->to('/login')->with('success', 'Sign up berhasil!');
        } else {
            return redirect()->back()->withInput()->with('errors', $ionAuth->errors());
        }
    }

    public function index()
    {
        $this->data['title'] = 'Sign Up';

        return view('auth/signup', $this->data);
    }

    public function create()
    {
        $request = Request::instance();

        $data = [
            'username' => $request->getPost('username'),
            'email' => $request->getPost('email'),
            'password' => $request->getPost('password'),
            'password_confirm' => $request->getPost('password_confirm'),
        ];

        $ionAuth = new IonAuth();

        if ($ionAuth->register($data)) {
            return redirect()->to('/login')->with('success', 'Sign up berhasil!');
        } else {
            return redirect()->back()->withInput()->with('errors', $ionAuth->errors());
        }
    }
}
