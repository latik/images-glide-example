<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadImage extends Controller
{
    /**
     * Handle the incoming image upload request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $imagePath = $request->file('image')->store('images');

        $url = Storage::url($imagePath);

        return back()
            ->with('status', 'Image uploaded! ' . $url);
    }
}
