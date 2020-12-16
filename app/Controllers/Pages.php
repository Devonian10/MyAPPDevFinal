<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {


        $data = [
            'title' => 'Home | MyAppDev'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {

        $data = [
            'title' => 'About Me | MyAppDev'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {

        $data = [
            'title' => 'Contact Us | MyAppDev',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => ' Jln Griya Prima Tonasa',
                    'kota' => 'Makassar'

                ],
                
            ]
        ];

        return view('pages/contact', $data);
    }
    public function info()
    {
        $data = ['title' => 'Info | MyAppDev'];
        return view('pages/info', $data);
    }

    public function modal()
    {
        return view('pages/modal');
    }
}
