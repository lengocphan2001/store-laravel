<?php

namespace App\Services\Admin;

use App\Helpers\FileHelper;
use App\Models\Banner;
use App\Services\Service;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class BannerService extends Service
{
    /**
     * Get List Banners
     *
     * @return Builder[]|Collection
     */
    public function getListBanners(): Collection|array
    {
        return Banner::query()
            ->select(['id', 'title', 'image', 'link', 'status'])
            ->get();
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
        if (file_exists($path)) {
            File::delete($path);
        }
    }

    /**
     * Create
     *
     * @param $request
     */
    public function create($data)
    {
        $data['image'] = $this->uploadFile($data);
        Banner::create($data);
    }


    /**
     * Create
     *
     * @param $request
     */
    public function update($banner, $data)
    {
        if (isset($data['image'])) {
            $data['image'] = $this->uploadFile($data);
        }
        $banner->update([
            'image' => isset($data['image']) ? $data['image'] : $banner['image'],
            'title' => $data['title'],
            'link' => $data['link'],
            'status' => isset($data['status']) ? 1 : 0,
        ]);
    }

    /**
     * Delete
     *
     * @param $id
     */
    public function delete($id)
    {
        $banner = Banner::query()->where('id', $id)->first();
        if (!$banner) {
            abort(404);
        }
        DB::beginTransaction();
        try {
            $this->deleteFile($banner->image);
            $banner->delete();
        } catch (\Exception $e) {
            DB::rollback();
        }
        DB::commit();
    }
}
