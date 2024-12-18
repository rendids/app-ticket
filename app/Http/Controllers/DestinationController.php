<?php
namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DestinationController extends Controller
{
    // Display a list of all destinations
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destination.index', compact('destinations'));
    }

    // Show the form to create a new destination
    public function create()
    {
        return view('admin.destination.create');
    }

    // Store a newly created destination
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Destination::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'image' => $imagePath,
            'slug' => Str::slug($request->name, '-')
        ]);

        return redirect()->route('admin.destination')->with('success', 'Destination created successfully.');
    }

    // Show the form to edit an existing destination
    public function edit($id)  
    {
        $destination = Destination::findOrFail($id);
        return view('admin.destination.edit', compact('destination'));
    }

    // Update the specified destination
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $destination = Destination::findOrFail($id);

        $imagePath = $destination->image;  // Keep the existing image if no new one is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if a new one is uploaded
            if ($destination->image) {
                Storage::disk('public')->delete($destination->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $destination->update([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'image' => $imagePath,
            'slug' => Str::slug($request->name, '-')

        ]);

        return redirect()->route('admin.destination')->with('success', 'Destination updated successfully.');
    }

    // Delete the specified destination
    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);

        // Delete the image file if it exists
        if ($destination->image) {
            Storage::disk('public')->delete($destination->image);
        }

        $destination->delete();

        return redirect()->route('admin.destination')->with('success', 'Destination deleted successfully.');
    }
}
