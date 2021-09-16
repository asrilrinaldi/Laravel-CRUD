<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class MahasiswaController extends Controller
{
    public function index(){
      $nama = "Asril Rinaldi";
      $matkul = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('mahasiswa',['nama' => $nama, 'matkul' => $matkul]);
      
    }
}