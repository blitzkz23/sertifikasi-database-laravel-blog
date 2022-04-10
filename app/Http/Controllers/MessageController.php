<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $data = Message::get();
        return view('admin.message.index', compact('data'));
    }

    public function insert(Request $request)
    {
        $request->validate(Message::$rules);
        $requests = $request->all();

        $message = Message::create($requests);
        if ($message) {
            return redirect()->back()->with('status', 'Komentar berhasil dibuat !');
        }

        return redirect()->back()->with('status', 'Gagal memberikan komentar!');
    }

    public function delete($id)
    {
        $message = Message::find($id);
        if ($message == null) {
            return redirect()->back()->with('status', 'Data tidak ditemukan !');
        }
        $delete = $message->delete();
        if ($delete) {
            return redirect('admin/message')->with('status', 'Berhasil menghapus data !');
        }
        return redirect('admin/message')->with('status', 'Gagal menghapus data !');
    }
}
