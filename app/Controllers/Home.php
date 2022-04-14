<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('halaman/Dashboard');
    }

    public function Dashboard()
    {
        return view('halaman/Dashboard');
    }

    public function register(){
        
        return view('auth/register');
        }

        public function Akun(){
            
        //$data['title']= 'user list';
        //$users= new \Myth\Auth\Models\UserModel();
        //$data['users']= $users->findAll();

        $db = \config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid,username,email,name');
        $builder->join('auth_groups_users','auth_groups_users.user_id= users.id');
        $builder->join('auth_groups','auth_groups.id= auth_groups_users.group_id');
        $query =$builder->get();

        $data['users'] = $query->getResult();


            return view('halaman/Akun',$data);
            }
        

    
}
