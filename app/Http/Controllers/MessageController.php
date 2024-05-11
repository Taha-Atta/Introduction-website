<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $messages = Message::paginate(config('pagination.count'));
        return view('admin.messages.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.messages.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        $data =  $request->validated();
        Message::create($data);
       return to_route('admin.messages.index')->with('success',__('keywords.created_successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('admin.messages.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
         return view('admin.messages.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        $data = $request->validated();
        $message->update($data);
       return to_route('admin.messages.index')->with('success',__('keywords.updated_successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
           $message->delete();
       return to_route('admin.messages.index')->with('success',__('keywords.deleted_successfuly'));
    }
}
