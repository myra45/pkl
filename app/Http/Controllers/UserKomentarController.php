<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class UserKomentarController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');
    
    // Mengambil komentar berdasarkan user yang login
    $komen = Komentar::where('user_id', auth()->user()->id) // Filter berdasarkan user ID yang login
        ->when($search, function ($query) use ($search) {
            // Jika ada pencarian, filter berdasarkan tanggal atau judul berita,
            // tetapi tetap membatasi berdasarkan user yang login
            $query->where(function ($query) use ($search) {
                $query->where('created_at', 'like', "%{$search}%")
                    ->orWhereHas('berita', function ($query) use ($search) {
                        $query->where('judul', 'like', "%{$search}%");
                    });
            });
        })
        ->with('berita') // Include relasi dengan berita
        ->paginate(10);

    return view('user.komentars', compact('search', 'komen'));
}

    
    public function delete($id) {
        $komentar = Komentar::findOrFail($id);

        // Pastikan hanya user yang memiliki komentar tersebut bisa menghapus
        if ($komentar->user_id !== auth()->user()->id) {
            return redirect()->back()->with('error', 'You are not authorized to delete this comment!');
        }

        $komentar->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully!');
    }
}
