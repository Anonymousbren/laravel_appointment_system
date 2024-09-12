<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    // Get all appointments
    public function index()
    {
        $appointments = Appointment::all();
        return response()->json($appointments);
    }

    // Store a new appointment
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        $appointment = Appointment::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'date' => $validatedData['date'],
            'user_id' => $request->user()->id, // Associate with logged-in user
        ]);

        return response()->json($appointment, 201);
    }

    // Update an existing appointment
    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'string|max:255',
            'description' => 'string',
            'date' => 'date',
        ]);

        $appointment->update($validatedData);

        return response()->json(['message' => 'Appointment updated successfully']);
    }

    // Delete an appointment
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return response()->json(['message' => 'Appointment deleted successfully']);
    }
}
