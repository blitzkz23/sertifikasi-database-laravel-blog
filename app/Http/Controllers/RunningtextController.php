<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Runningtext;

class RunningtextController extends Controller
{
    public function index()
    {
        $data = Runningtext::get();
        return view('admin.runningtext.index', compact('data'));
    }

    public function create()
    {
        return view('admin.runningtext.create');
    }

    public function insert(Request $request)
    {
        $request->validate(Runningtext::$rules);
        $requests = $request->all();

        $cat = Runningtext::create($requests);
        if ($cat) {
            return redirect('admin/runningtext')->with('status', 'Berhasil menambah data !');
        }
    }

    public function edit($id)
    {
        $data = Runningtext::find($id);
        return view('admin.runningtext.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $d = Runningtext::find($id);
        if ($d == null) {
            return redirect('admin/runningtext')->with('status', 'Data tidak ditemukan !');
        }

        $req = $request->all();
        $data = Runningtext::find($id)->update($req);
        if ($data) {
            return redirect('admin/runningtext')->with('status', 'Berhasil mengubah data !');
        }
        return redirect('admin/runningtext')->with('status', 'Gagal mengubah data !');
    }

    public function delete($id)
    {
        $data = Runningtext::find($id);
        if ($data == null) {
            return redirect('admin/runningtext')->with('status', 'Data tidak ditemukan !');
        }
        $delete = $data->delete();
        if ($delete) {
            return redirect('admin/runningtext')->with('status', 'Berhasil menghapus data !');
        }
        return redirect('admin/runningtext')->with('status', 'Gagal menghapus data !');
    }
}
