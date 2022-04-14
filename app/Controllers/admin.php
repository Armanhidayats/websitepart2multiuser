<?php

namespace App\Controllers;

class admin extends BaseController
{
    public function index()
    {
        $data['$title']= 'user list';
        return view('admin/index',$data);
    }
}