<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function getGalleryView()
    {
        $imagesPath = resource_path("assets/models/details.json");
        $imagesData = json_decode(file_get_contents($imagesPath), true);

        $viewData = [
            'images' => $imagesData['models']
        ];

        return view('gallery', $viewData);
    }
}
