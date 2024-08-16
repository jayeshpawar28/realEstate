<?php

namespace App\Controllers;
use App\Models\CommonModel;

class Admin extends BaseController
{
    public function __construct(){

        $this->CommonModel = new CommonModel();

        $session = \Config\Services::session();
        
    }

    public function admin_login()
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
                    'admin_id' => $checkArray[0]->user_id,
                    'fullname' => $checkArray[0]->fullname,
                    'email' => $checkArray[0]->email
                ];

                $session->set($array);
                

                return redirect()->to('dashboard');
            }else {
                $session->setFlashdata('message', '<div class="alert alert-danger text-center">Invalid Credentials</div>');
            }

        }
        return view('admin/admin-login');
    }

    public function dashboard()
    {

        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if($this->CommonModel->totalCount('add_broker')){
            $totalBroker = $this->CommonModel->totalCount('add_broker');
            $data['totalBroker'] = $totalBroker;
        }

        if($this->CommonModel->totalCount('add_property')){
            $totalProperty = $this->CommonModel->totalCount('add_property');
            $data['totalProperty'] = $totalProperty;
        }

        if($this->CommonModel->totalCount('tbl_user')){
            $totalUser = $this->CommonModel->totalCount('tbl_user');
            $data['totalUser'] = $totalUser;
        }

        if($this->CommonModel->totalCount('enquiry')){
            $totalEnquiry = $this->CommonModel->totalCount('enquiry');
            $data['totalEnquiry'] = $totalEnquiry;
        }
        
        return view('admin/dashboard', $data);

    }

    public function logout()
    {
        $session = session();

        $session -> destroy();

        return redirect()->to('admin-login');

    }
}
