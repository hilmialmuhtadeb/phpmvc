<?php

class User_model
{
  private $user = [
    'nama' => 'Rachita Amelia',
    'sekolah' => 'SMA Al-Kautsar',
    'kuliah' => 'Jurusan Manajemen Universitas Negeri Yogyakarta'
  ];

  public function getUser()
  {
    return $this->user;
  }
}
