<?php

namespace App\Controllers;

use App\Models\PostModel;

class Post extends BaseController
{
    public function create()
    {
        helper(['form']);
        echo view('create_post');
    }

    public function save()
    {
        helper(['form']);

        $rules = [
            'title' => [
                'label' => 'Title',
                'rules' => 'required|max_length[128]',
                'errors' => [
                    'required'    => 'Title harus di isi!',
                    'max_length'  => 'Title maksimal 128 karakter!'
                ]
            ],
            'content' => [
                'label' => 'Content',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Content harus di isi!'
                ]
            ],
            'publisher' => [
                'label' => 'Publisher',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required'    => 'Email Publisher harus di isi!',
                    'valid_email' => 'Format email salah!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]|regex_match[/(?=.*[A-Z])(?=.*[\W])/]',
                'errors' => [
                    'required'     => 'Password harus di isi!',
                    'min_length'   => 'Password minimal 6 karakter!',
                    'regex_match'  => 'Password harus mengandung huruf besar & simbol!'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return view('create_post', [
                'validation' => $this->validator
            ]);
        } else {
            $model = new PostModel();
            $data = [
                'title'     => $this->request->getPost('title'),
                'content'   => $this->request->getPost('content'),
                'publisher' => $this->request->getPost('publisher'),
                'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to(base_url('post/login'))->with('success', 'Data berhasil disimpan!');
        }
    }

    public function index()
    {
        $model = new \App\Models\PostModel();
        $data['posts'] = $model->orderBy('created_at', 'DESC')->findAll();

        echo view('list_post', $data);
    }

    public function login()
    {
        helper(['form']);
        echo view('login');
    }

    public function home()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(base_url('post/login'));
        }

        $user = session()->get('user');
        return view('home', ['user' => $user]);
    }

    public function loginAuth()
    {
        helper(['form']);

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new \App\Models\PostModel();
        $user = $model->where('publisher', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                session()->set('isLoggedIn', true);
                session()->set('user', $user);
                return redirect()->to(base_url('post/home'));
            } else {
                return redirect()->to(base_url('post/login'))->with('error', 'Password salah!');
            }
        } else {
            return redirect()->to(base_url('post/login'))->with('error', 'Email tidak ditemukan!');
        }
    }

    public function profile()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(base_url('post/login'));
        }
    
        $user = session()->get('user');
        return view('profile', [
            'user' => $user,
            'title' => 'Profile'
        ]);
    }    

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('post/login'));
    }
}
