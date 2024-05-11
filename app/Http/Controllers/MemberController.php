<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Support\Str;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.members.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)

    {

        $data =  $request->validated();
        $data['slug'] = Str::slug( $data['name'], '-');

        $data['image'] = Storage::putFile('members', $data['image']);

        // dd($data);
        Member::create($data);
        return to_route('admin.members.index')->with('success', __('keywords.created_successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('admin.members.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('admin.members.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {


        $data = $request->validated();
        if ($request->has('image')) {
            Storage::delete($member->image);
            $data['image'] = Storage::putFile('members', $data['image']);
        }
        $member->update($data);
        return to_route('admin.members.index')->with('success', __('keywords.updated_successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        Storage::delete($member->image);
        $member->delete();
        return to_route('admin.members.index')->with('success', __('keywords.deleted_successfuly'));
    }
}