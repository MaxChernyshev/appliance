<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLocationRequest;
use App\Services\UploadImageService;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::paginate(30);

        return view('admin.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocationRequest $request, Location $location)
    {
        $imageService = new UploadImageService();
        $validated = $request->all();
        $validated['image'] = $imageService->uploadLocationImage($request->image);
        $validated['image_1'] = $imageService->uploadLocationImage($request->image_1);
        $validated['image_2'] = $imageService->uploadLocationImage($request->image_2);
        $validated['image_3'] = $imageService->uploadLocationImage($request->image_3);
        $validated['image_4'] = $imageService->uploadLocationImage($request->image_4);

        Location::create($validated);
        $slug = Location::latest()->first()->slug;
        $slug = $slug.'-repair-service';
        Location::latest()->first()->update(["slug" => "$slug"]);

        return redirect()->route('location.index')->with('success', 'Location added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);
        return view('admin.locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLocationRequest $request, Location $location, UploadImageService $imageService)
    {
        $imageService = new UploadImageService();
        $validated = $request->all();

        if ($request->image)
        {
            $validated['image'] = $imageService->updateLocationImage($request->image);
        }

        if ($request->image_1)
        {
            $validated['image_1'] = $imageService->updateLocationImage($request->image_1);
        }
        if ($request->image_2)
        {
            $validated['image_2'] = $imageService->updateLocationImage($request->image_2);
        }
        if ($request->image_3)
        {
            $validated['image_3'] = $imageService->updateLocationImage($request->image_3);
        }
        if ($request->image_4)
        {
            $validated['image_4'] = $imageService->updateLocationImage($request->image_4);
        }

        $location->update($validated);

        return redirect()->route('location.index')->with('success', 'Changes saved');;

        $path = $location->image;
        if ($request->image) {
            $path = $imageService->updateLocationImage($request->image, $location->image);
        }
        $location->update(array_merge($request->validated(), ['image' => $path]));

        return redirect()->route('location.index')->with('success', 'Changes saved');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::find($id)->delete($id);

        return redirect()->back()->with('success', 'Location deleted');
    }
}
