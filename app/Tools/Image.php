<?php

namespace App\Tools;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageFacade;

class Image
{
    protected $storePaths = [];
    protected $storePathTemplates = [
        "source" => "catalog/#DIR_NAME#/source",
        "image" => "catalog/#DIR_NAME#/image",
        "thumb" => "catalog/#DIR_NAME#/thumb",
    ];

    protected $resizeQuality = 100;
    protected $storeSizes = [
        "image" => ["width" => 600, "height" => 300],
        "thumb" => ["width" => 300, "height" => 150],
    ];

    public function __construct($dirName)
    {
        foreach ($this->storePathTemplates as $key => $imageStorePathTemplate)
            $this->storePaths[$key] = str_replace("#DIR_NAME#", $dirName, $imageStorePathTemplate);
    }

    public function upload($image, $object = null): ?string
    {
        if (!is_null($image))
        {
            if (!is_null($object) && !is_null($object->image))
                $this->remove($object);
        }
        else
        {
            return $object === null ? null : $object->image;
        }

        $imageExtension = $image->extension();
        $imageStorePath = $image->store($this->imageStorePaths['source'], 'public');
        $imageFullPath = Storage::disk('public')->path($imageStorePath);

        $this->resize($imageFullPath, $this->imageStorePaths['image'] . "/",
            $this->storeSizes['image']['width'], $this->storeSizes['image']['height'], $imageExtension);

        $this->resize($imageFullPath, $this->imageStorePaths['thumb'] . "/",
            $this->storeSizes['thumb']['width'], $this->storeSizes['thumb']['height'], $imageExtension);

        return basename($imageFullPath);
    }

    private function resize($imageFullPath, $destinyImagePath, $width, $height, $extension)
    {
        $image = ImageFacade::make($imageFullPath)
            ->heighten($height)
            ->resizeCanvas($width, $height, 'center', false, 'eeeeee')
            ->encode($extension, $this->resizeQuality);

        Storage::disk('public')->put($destinyImagePath . basename($imageFullPath), $image);
        $image->destroy();
    }

    public function remove($object)
    {
        if(!is_null($object->image))
        {
            foreach ($this->storePaths as $key => $path)
                Storage::disk('public')->delete($path . "/" . $object->image);
        }
    }
}
