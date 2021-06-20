<?php


namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;


class UploadImageService
{
    public function uploadLocationImage($file, $image = NULL)
    {
        $name = null;
        if ($file) {
            if($image) {
                Storage::delete($image);
            }
            $name = '/storage/' . $file->store('/location', 'public');
        }
        return $name;
    }

    public function updateLocationImage($file, $image = NULL) {
        if ($image) {
            $oldImagePath = '/public' .substr($image, strlen('/storage'));
            Storage::delete($oldImagePath);
        }
        return '/storage/' . $file->store('/location', 'public');
    }

    public function uploadImage($file, $folder, $image = NULL)
    {
        $name = null;
        if ($file) {
            if ($image) {
                Storage::delete($image);
            }
            $name = '/storage/' . $file->store("/$folder", 'public');
        }
        return $name;
    }

    public function updateImage($file, $folder, $image = NULL)
    {
        if ($image) {
            $image = '/public' . substr($image, strlen('/storage'));
            Storage::delete($image);
        }

        return '/storage/' . $file->store("/$folder", 'public');
    }

    public function deleteImage($image)
    {

        if (is_array($image) or $image instanceof Collection) {
            foreach ($image as $media) {

                $oldImagePath = '/public' . substr($media->link, strlen('/storage'));
                Storage::delete($oldImagePath);
            }
        } elseif ($image) {
            $image = '/public' . substr($image, strlen('/storage'));
            Storage::delete($image);
        }
    }

}
