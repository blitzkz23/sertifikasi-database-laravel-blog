<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    public function index()
    {
        $data = Info::get();
        return view('admin.info.index', compact('data'));
    }

    public function create()
    {
        return view('admin.info.create');
    }

    public function insert(Request $request)
    {
        $request->validate(Info::$rules);
        $requests = $request->all();

        $cat = Info::create($requests);
        if ($cat) {
            return redirect('admin/info')->with('status', 'Berhasil menambah data !');
        }
        return redirect('admin/info')->with('status', 'Gagal menambah data !');
    }

    public function edit($id)
    {
        $info = Info::find($id);
        return view('admin.info.edit', compact('info'));
    }

    public function update(Request $request, $id)
    {
        $d = Info::find($id);
        if ($d == null) {
            return redirect('admin/info')->with('status', 'Data tidak ditemukan !');
        }

        $req = $request->all();
        $data = Info::find($id)->update($req);
        if ($data) {
            return redirect('admin/info')->with('status', 'Berhasil mengubah data !');
        }
        return redirect('admin/info')->with('status', 'Gagal mengubah data !');
    }

    public function delete($id)
    {
        $data = Info::find($id);
        if ($data == null) {
            return redirect('admin/info')->with('status', 'Data tidak ditemukan !');
        }
        $delete = $data->delete();
        if ($delete) {
            return redirect('admin/info')->with('status', 'Berhasil menghapus data !');
        }
        return redirect('admin/info')->with('status', 'Gagal menghapus data !');
    }
}
