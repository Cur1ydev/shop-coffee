<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $name = 'Phạm  Lợi';
        Mail::send('mail',compact('name'),function ($email){
            $email->to('loipvph25885@fpt.edu.vn','Xin chào Lợi Xoăn');
        });
    }
}
