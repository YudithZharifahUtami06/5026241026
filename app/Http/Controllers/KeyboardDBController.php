<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeyboardDBController extends Controller
{
    public function index()
    {
        $keyboard = DB::table('keyboard')->paginate(10);

        return view('keyboard.index',[
            'keyboard' => $keyboard
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $keyboard = DB::table('keyboard')
            ->where('merkkeyboard','like',"%".$cari."%")
            ->paginate(10);

        return view('keyboard.index',[
            'keyboard' => $keyboard
        ]);
    }

    public function tambah()
    {
        return view('keyboard.tambah');
    }

    public function store(Request $request)
    {
        DB::table('keyboard')->insert([
            'merkkeyboard' => $request->merkkeyboard,
            'stockkeyboard' => $request->stockkeyboard,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/keyboard');
    }

    public function edit($id)
    {
        $keyboard = DB::table('keyboard')
            ->where('kodekeyboard',$id)
            ->get();

        return view('keyboard.edit',[
            'keyboard' => $keyboard
        ]);
    }

    public function update(Request $request)
    {
        DB::table('keyboard')
            ->where('kodekeyboard',$request->id)
            ->update([
                'merkkeyboard' => $request->merkkeyboard,
                'stockkeyboard' => $request->stockkeyboard,
                'tersedia' => $request->tersedia
            ]);

        return redirect('/keyboard');
    }

    public function hapus($id)
    {
        DB::table('keyboard')
            ->where('kodekeyboard',$id)
            ->delete();

        return redirect('/keyboard');
    }
}
