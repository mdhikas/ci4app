<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $faker = \Faker\Factory::create();

        $data = [
            'title' => 'Home | CI4APP'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => '123',
                    'kota' => 'pasuruan'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => '456',
                    'kota' => 'jakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
