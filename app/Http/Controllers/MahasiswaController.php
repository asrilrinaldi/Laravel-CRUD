<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class MahasiswaController extends Controller
{
    // public function index(){
    //   $nama = "Asril Rinaldi";
    //   $matkul = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    // 	return view('mahasiswa',['nama' => $nama, 'matkul' => $matkul]);
      
    // }
    public function index(){
      //ambil data dari tabel mahasiswa
      $mahasiswa = DB::table('mahasiswa')->get();

      //mengirim data ke view index
      return view('index',['mahasiswa'=> $mahasiswa]);
    }
}