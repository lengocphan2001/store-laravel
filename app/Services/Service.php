<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

abstract class Service
{
    /**
     * @var null|User|Admin
     */
    protected $user = null;

    /**
     * @param User|Admin|null $user
     * @return $this
     */
    public function withUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return User|Admin|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Create new service instance
     *
     * @return $this
     */
    public static function getInstance()
    {
        return app(static::class);
    }

    /**
     * uploadImage
     *
     * @param $data
     * 
     * @return $path
     */

    public function uploadFile($data)
    {
        $file = $data['image'];
        $filename = time() . '_' . $file->getClientOriginalName();
        Image::make($file)->encode('webp', 90)->resize(270, 250)->save(storage_path('app/public/images/banners/' . $filename . '.webp'));
        $path = 'storage/images/banners/' . $filename . '.webp';

        return $path;
    }

    /**
     * deleteImage
     *
     * @param $path
     */

    public function deleteFile($path)
    {
        // dd($path);
        if (File::exists(storage_path($path))) {
            Storage::delete(storage_path($path));
        } else {
            dd('File does not exist.');
        }
    }
}
