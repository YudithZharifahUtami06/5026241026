<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangDBController extends Controller
{
    public function indexkeranjang()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //jika tampilan hasil bukan pagination
		$keranjang = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('KeranjangBelanja.indexkeranjang', ['keranjang' => $keranjang]);


    }

	public function belikeranjang()
	{

		// memanggil view tambah
		return view('KeranjangBelanja.keranjangbeli');

	}

	// method untuk insert data ke table keranjang
	public function storekeranjang(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->kode,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga,
		]);

		return redirect('/keranjangbelanja');
	}



	// method batal
	public function batal($id)
	{
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

	public function carikeranjang(Request $request)
	{
		$cari = $request->cari;
		$keranjang = DB::table('keranjangbelanja')
		->where('KodeBarang','like',"%".$cari."%")
		->paginate();

		return view('KeranjangBelanja.indexkeranjang',['keranjang' => $keranjang]);
	}
}
