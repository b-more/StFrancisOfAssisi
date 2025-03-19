<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display the gallery main page with albums.
     */
    public function index()
    {
        // Get published albums with photo count
        $albums = Album::where('status', 'published')
            ->withCount('photos')
            ->orderBy('order')
            ->orderBy('created_at', 'desc')
            ->get();

        // Get recent photos for the gallery
        $recentPhotos = Photo::with('album')
            ->whereHas('album', function($query) {
                $query->where('status', 'published');
            })
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        return view('gallery.index', compact('albums', 'recentPhotos'));
    }

    /**
     * Display a specific album with its photos.
     */
    public function show($slug)
    {
        $album = Album::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $photos = $album->photos()
            ->orderBy('order')
            ->orderBy('created_at', 'desc')
            ->paginate(24);

        return view('gallery.show', compact('album', 'photos'));
    }

    /**
     * Display a single photo with its details.
     */
    public function photo($id)
    {
        $photo = Photo::findOrFail($id);

        // Make sure the album is published
        if ($photo->album->status !== 'published') {
            abort(404);
        }

        $album = $photo->album;

        // Get next and previous photos in the same album
        $nextPhoto = Photo::where('album_id', $album->id)
            ->where('order', '>', $photo->order)
            ->orderBy('order')
            ->first();

        $prevPhoto = Photo::where('album_id', $album->id)
            ->where('order', '<', $photo->order)
            ->orderBy('order', 'desc')
            ->first();

        return view('gallery.photo', compact('photo', 'album', 'nextPhoto', 'prevPhoto'));
    }
}
