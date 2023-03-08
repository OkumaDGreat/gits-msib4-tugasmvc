<?php

namespace App\Http\Controllers;

use App\Models\ModelFilm;
use App\Models\ModelGenre;
use Illuminate\Http\Request;

class Film extends Controller
{
    public function index()
    {
        $data=[
            'judul' => 'Daftar Film',
            'dataFilm' => ModelFilm::all(),
            'dataGenre' => ModelGenre::all()
        ];
        return View('data', $data);
    }

    public function tambah()
    {   $data=[
            'judul' => 'Tambah Data Film',
        ];
        return View('formTambah', $data);
    }

    public function simpan(Request $r)
    {
        $kode_film = $r->kode_film;
        $nama_film = $r->nama_film;
        $waktutayang = $r->waktutayang;

        try {
            $film = new ModelFilm;
            $film->kode_film = $kode_film;
            $film->nama_film = $nama_film;
            $film->waktutayang = $waktutayang;
            $film->save();
    
            $r->session()->flash('pesan', 'Data Berhasil Disimpan');
            return redirect('film/tambah/');
        } catch (Throwable $e) {
            echo $e;
        }
      
    }

    public function edit($id_film)
    {
        $film = ModelFilm::find($id_film);
        $data=[
            'judul' => 'Edit Data Film',
            'id_film' => $film->id_film,
            'kode_film' => $film->kode_film,
            'nama_film' => $film->nama_film,
            'waktutayang' => $film->waktutayang,
        ];
        return View('edit', $data);
    }

    public function simpan_edit(Request $r)
    {
        $id_film = $r->id_film;
        $kode_film = $r->kode_film;
        $nama_film = $r->nama_film;
        $waktutayang = $r->waktutayang;

        try {
            $film = ModelFilm::find($id_film);
            $film->id_film = $id_film;
            $film->kode_film = $kode_film;
            $film->nama_film = $nama_film;
            $film->waktutayang= $waktutayang;
            $film->save();
    
            $r->session()->flash('pesan', 'Data Berhasil Diupdate');
            return redirect('buku/index/');
        } catch (Throwable $e) {
            echo $e;
        }
      
    }

    public function hapus($id_film)
    {
       ModelFilm::find($id_film)->delete();
       return redirect()->back();
    }
}
