<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index() {
        return ([
            'NIS'=> '3103119036',
            'Nama' => 'Azka Dwi Fadhillah',
            'Gender' => 'Pria',
            'Phone' => '082136919066',
            'Class' => 'XII RPL 2'
        ]);
 }
}