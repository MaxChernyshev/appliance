<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Services\UploadImageService;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Collection;
use App\Traits\ModelFolder;
use Illuminate\Support\Facades\Storage;


class ServiceController extends Controller
{

//    use ModelFolder;

    public function index()
    {
        $services = Service::paginate(30);

        return view('admin.services.index', compact('services'));
    }


    public function create()
    {
        return view('admin.services.create');
    }


    public function store(StoreServiceRequest $request, Service $service)
    {
        $imageService = new UploadImageService();
        $validated = $request->all();

        $folder = Service::getTableName();

        $validated['image'] = $imageService->uploadImage($request->image, $folder);
        $validated['image_1'] = $imageService->uploadImage($request->image_1, $folder);
        $validated['image_2'] = $imageService->uploadImage($request->image_2, $folder);
        $validated['image_3'] = $imageService->uploadImage($request->image_3, $folder);
        $validated['image_4'] = $imageService->uploadImage($request->image_4, $folder);

        Service::create($validated);
        $slug = Service::latest()->first()->slug;
        $slug = $slug . '-repair-los-angeles';
        Service::latest()->first()->update(["slug" => "$slug"]);

        return redirect()->route('service.index')->with('success', 'Service added');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
    }


    public function update(StoreServiceRequest $request, Service $service, UploadImageService $imageService)
    {

        $folder = Service::getTableName();
        $imageService = new UploadImageService();
        $validated = $request->all();

        if ($request->image)
        {

            dd($service->image);
            $oldIimage = '/public' . substr($service->image, strlen('/storage'));

//            Storage::delete($oldIimage);

            $validated['image'] = $imageService->updateImage($request->image, $folder, $oldIimage);
//            $validated['image'] = $imageService->updateImage($request->image, $folder, $service->image);
        }

        if ($request->image_1)
        {
            $oldIimage = '/public' . substr($service->image_1, strlen('/storage'));

            $imageService->deleteImage($oldIimage);

            $validated['image_1'] = $imageService->updateImage($request->image_1, $folder, $service->image_1);
        }
        if ($request->image_2)
        {
            $oldIimage = '/public' . substr($service->image_2, strlen('/storage'));

            Storage::delete($oldIimage);

            $validated['image_2'] = $imageService->updateImage($request->image_2, $folder, $service->image_2);
        }
        if ($request->image_3)
        {
            $oldIimage = '/public' . substr($service->image_3, strlen('/storage'));

            Storage::delete($oldIimage);

            $validated['image_3'] = $imageService->updateImage($request->image_3, $folder, $service->image_3);
        }
        if ($request->image_4)
        {
            $oldIimage = '/public' . substr($service->image_4, strlen('/storage'));

            Storage::delete($oldIimage);

            $validated['image_4'] = $imageService->updateImage($request->image_4, $folder, $service->image_4);
        }

        $service->update($request->validated());

        return redirect()->route('service.index')->with('success', 'Changes saved');;
    }


    public function destroy(Service $service, UploadImageService $imageService)
    {

        if ($service->image)
        {
            $imageService->deleteImage($service->image);
        }
        if ($service->image_1)
        {
            $imageService->deleteImage($service->image_1);
        }
        if ($service->image_2)
        {
            $imageService->deleteImage($service->image_2);
        }
        if ($service->image_3)
        {
            $imageService->deleteImage($service->image_3);
        }
        if ($service->image_4)
        {
            $imageService->deleteImage($service->image_4);
        }

        $service->delete();

        return redirect()->back()->with('success', 'Service deleted');
    }
}
