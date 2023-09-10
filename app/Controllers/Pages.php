<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function home(): void
  {
    $data = [
      'title' => 'Home | Satrio Ponco Sushadi'
    ];
    echo view('pages/home', $data);
  }
  public function projects(): void
  {
    $data = [
      'title' => 'Projects | Satrio Ponco Sushadi',
      'projects' => [
        [
          'img' => 'assets/img/16Stamford.png',
          'projecturl' => 'https://p2-c3-lavender.web.app/',
          'projectname' => '16Stamford',
          'description' => '16Stamford adalah sebuah website pemesanan makanan online berbasis VueJS dan ExpressJS.'
        ],
        [
          'img' => 'assets/img/CIN-Indonesia.png',
          'projecturl' => 'https://cin-indonesia-lavender.web.app/',
          'projectname' => 'CIN Indonesia',
          'description' => 'CIN Indonesia merupakan sebuah website mockup dari CNN Indonesia. Website ini dibuat menggunakan ReactJS, ExpressJS dan PostgreSQL.'
        ],
        [
          'img' => 'assets/img/Martian-Project.png',
          'projecturl' => 'https://martian-space.web.app/',
          'projectname' => 'Martian Project',
          'description' => 'Martian Project merupakan website yang didalamnya terdapat fitur untuk melihat project SpaceX dan bermain game. Dibuat menggunakan VueJS, ExpressJS dan MongoDB.'
        ],
        [
          'img' => 'assets/img/FAF.jpg',
          'projecturl' => '',
          'projectname' => 'Find-A-Friend',
          'description' => 'Find-A-Friend merupakan aplikasi Android yang dibuat menggunakan React Native. Fitur yang terdapat pada aplikasi ini adalah quiz, Google Maps, live tracking dan live chat. Selain React Native, aplikasi ini memanfaatkan Midtrans API, ExpressJS, PostgreSQL, Axios dan Redux Toolkit.'
        ]
      ]
    ];
    echo view('pages/projects', $data);
  }
  public function aboutMe(): void
  {
    $data = [
      'title' => 'About Me | Satrio Ponco Sushadi'
    ];
    echo view('pages/about-me', $data);
  }
}
