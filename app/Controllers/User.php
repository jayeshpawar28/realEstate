<?php

namespace App\Controllers;
use App\Models\CommonModel;

class User extends BaseController
{
    
    public function __construct()
    {
        $this->CommonModel = new CommonModel;
    }
    public function user()
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if ($this->request->getPost()) {

            $dataArray = $this->request->getPost();

            $newPass = md5($this->request->getPost('password'));
            unset($dataArray['password']);
            $dataArray += ['password'=>$newPass];

            // $dataArray = [
            //     'email' => $this->request->getPost('email'),
            //     'password' => md5($this->request->getPost('password'))
            // ];

            if ($this->CommonModel->insertData('tbl_user', $dataArray)) {
                $session->setFlashdata('message' , '<div class="alert alert-success text-center">New User Added Successfully</div>');
                return redirect()->to('manage-user');
            }
        }
        return view('admin/user');
    }

    public function manage()
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        $data['users'] = $this->CommonModel->getData('tbl_user');
        return view('admin/manage-user', $data);
    }

    public function update($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }
        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            $newPass = md5($this->request->getPost('password'));
            unset($dataArray['password']);
            $dataArray += ['password'=>$newPass];

            if ($this->CommonModel->updateData('tbl_user', 'user_id', $id, $dataArray)) {
                $session->setFlashdata('message' , '<div class="alert alert-success text-center">User Updated Successfully</div>');
                return redirect()->to('manage-user');
            }
        }
        $data['user'] = $this->CommonModel->getDatawhere('tbl_user', 'user_id', $id);
        return view('admin/update-user', $data);
        
    }

    public function delete($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if($this->CommonModel->deleteData('tbl_user', 'user_id', $id)){
            $session->setFlashdata('message' , '<div class="alert alert-success text-center">User Deletedted Successfully</div>');
           return redirect()->to('manage-user');
        }
    }
    
}
