<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class FileService extends Service
{

    /**
     * uploadImage
     *
     * @param $data
     * 
     * @return $path
     */

    public function uploadFile($data, $path)
    {
        $file = $data['image'];
        $filename = time() . '_' . $file->getClientOriginalName();
        Image::make($file)->encode('webp', 90)->resize(270, 250)->save(storage_path('app/public/images/' . $path . '/' . $filename . '.webp'));
        $path = 'storage/images/' . $path . '/' . $filename . '.webp';

        return $path;
    }

    /**
     * deleteImage
     *
     * @param $path
     */

    public function deleteFile($path)
    {
        $path = str_replace('storage', 'storage/app/public', $path);
        if (Storage::exists('app/public/images/banner/1680701366_337559584_220174467345334_1210152663825860683_n.jpg.webp')) {
            Storage::delete($path);
        } else dd("Cannot find");
    }
}
