<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(config('pagination.count'));
        return view('admin.testimonials.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        $data =  $request->validated();
        // dd($data);
        $data['image'] = Storage::putFile('testimonials', $data['image']);
        Testimonial::create($data);
        return to_route('admin.testimonials.index')->with('success', __('keywords.created_successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $data = $request->validated();
 
        if ($request->has('image')) {
            Storage::delete($testimonial->image);
            $data['image'] = Storage::putFile('testimonials', $data['image']);
        }
        $testimonial->update($data);
        return to_route('admin.testimonials.index')->with('success', __('keywords.updated_successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // dd($testimonial->image);
        Storage::delete($testimonial->image);
        $testimonial->delete();

        return to_route('admin.testimonials.index')->with('success', __('keywords.deleted_successfuly'));
    }
}
