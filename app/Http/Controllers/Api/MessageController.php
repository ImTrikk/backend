<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Message::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request)
    {
        $validated = $request->validated();
        $message = Message::create($validated);
        return $message;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Message::findOrFail($id);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MessageRequest $request, string $id)
    {
        $validated = $request->validated();
        $message = Message::findOrfail($id);
        $message->update($validated);
        return $message;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return $message;
    }
}
