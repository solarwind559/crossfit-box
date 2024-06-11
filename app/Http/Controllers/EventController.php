<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $events = Event::paginate(3);
        return view('schedule', compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('post.event.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'event_date' => 'required|date_format:Y-m-d\TH:i',
            'content' => 'required',
            'created_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'public');
            $fullUrl = Storage::disk('public')->url($path);
            \Log::info('Generated URL: ' . $fullUrl);
        }
        else {
            $path = asset('images/blog_image.jpg');
        }

        $event = new Event;
        $event->title = $validated['title'];
        $event->location = $validated['location'];
        $event->event_date = $validated['event_date'];
        $event->content = $validated['content'];
        $event->image = $fullUrl;
        $event->save();

        return redirect()->route('event.show', ['id' => $event->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $event = Event::find($id);

        $dateTime = Carbon::parse($event->event_date);

        $event->date = $dateTime->format('l, d/m/Y');
        $event->time = $dateTime->format('H:i');

        return view('single-event', compact('event'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $event = Event::findOrFail($id);

        return view('post.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $event->update($request->except('event_date', 'image'));

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'public');
            $fullUrl = Storage::disk('public')->url($path);

            $event->image = $fullUrl;
            $event->save();
        }
        return redirect()->route('post.event.edit', ['id' => $event->id])->with('success', 'Event updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
        $event = Post::findOrFail($id);
        $event->delete();

        return redirect()->route('schedule')->with('deleted', 'Event deleted successfully');
    }
}
