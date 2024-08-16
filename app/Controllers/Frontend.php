<?php

namespace App\Controllers;
use App\Models\CommonModel;

class Frontend extends BaseController
{
    public function __construct(){
        
        $this->CommonModel = new CommonModel();

        $session = \Config\Services::session();

    }

    public function index()
    {
        $data['properties'] = $this->CommonModel->getData('add_property');
        return view('frontend/index', $data);
    }

   

    public function contact()
    {
        $session = session();

        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            if ($this->CommonModel->insertData('contact', $dataArray)) {
                $session->setFlashdata('message', '<div class="alert alert-success">We Will Contact Soon..Thank You</div>');
                return redirect()->to("index");
            }
        }
        return view('frontend/contact');
    }

    public function login()
    {
        $session = session();

        if ($this->request->getPost()) {
            $dataArray = [
                
                'email' => $this->request->getPost('email'),
                'password' => md5($this->request->getPost('password'))
                
            ];

           $checkArray = $this->CommonModel->checkWhere('tbl_user', $dataArray);

            if (count($checkArray) > 0) {
                $array = [
                    'user_id' => $checkArray[0]->user_id,
                    'fullname' => $checkArray[0]->fullname,
                    'email' => $checkArray[0]->email,
                    'mobile' => $checkArray[0]->mobile,
                    'password' => $checkArray[0]->password
                    
                ];

                $session->set($array);

                $session->setFlashdata('message', '<div class="alert alert-success text-center">Login Succesfully</div>');

                return redirect()->to('welcome');

            }else {
                $session->setFlashdata('message', '<div class="alert alert-danger text-center">Invalid Credentials</div>');
            }
        }
        return view('frontend/login');
    }

    public function details($id)
    {
            $session = session();

            if ($this->request->getPost()) {
                $dataArray = $this->request->getPost();
                if ($this->CommonModel->insertData('enquiry', $dataArray)) {
                    $session->setFlashdata('message', '<div class="alert alert-success text-center">Your Enquiry Added Succesfully</div>');
                    return redirect()->to("welcome");
                }
            }
        
            $data['property'] = $this->CommonModel->getDatawhere('add_property', 'property_id', $id);
            $data['user'] = $this->CommonModel->getDatawhere('tbl_user', 'user_id', $id);
            $data['broker'] = $this->CommonModel->getDatawhere('add_broker', 'broker_id', $id);

        return view('frontend/details', $data);
    }
    public function welcome()
    {
        $session = session();
        $data['enquires'] = $this->CommonModel->getDatawhere('enquiry', 'user_id', $session->get('user_id'));

        return view('frontend/welcome', $data);
    }

    public function searchData($keyword)
    {
        $data['users'] = $this->CommonModel->searchResult('add_property' , $keyword);
        return $this->response->setJSON($data['users']);
    }

    

    public function register()
    {
        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            $newPass = md5($this->request->getPost('password'));
            unset($dataArray['password']);
            $dataArray += ['password'=>$newPass];

            if ($this->CommonModel->insertData('tbl_user', $dataArray)) {
                return redirect()->to('index');
            }
        }
        return view('frontend/register');
    }

    public function index_logout()
    {
        $session = session();

        $session -> destroy();

        return redirect()->to('login');
    }

    public function about()
    {
        return view('frontend/about');
    }

    public function services()
    {
        return view('frontend/services');
    }
}