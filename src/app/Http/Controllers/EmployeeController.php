<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $employee = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'user_type' => 'employee',
        ]);

        return response()->json([
            'message' => 'Employee created successfully',
            'employee' => $employee,
        ]);
    }

    public function delete(User $employee)
    {
        // Delete the employee user
        $employee->delete();

        // Return a JSON response indicating the success of deleting the employee
        return response()->json([
            'message' => 'Employee deleted successfully',
        ]);
    }

    public function update(Request $request, User $employee)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $employee->id,
            // Add validation rules for other fields as needed
        ]);

        $employee->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Update other fields as needed
        ]);

        return response()->json([
            'message' => 'Employee updated successfully',
            'employee' => $employee,
        ]);
    }

    public function show(User $employee)
    {
        return response()->json([
            'employee' => $employee,
        ]);
    }

    // public function changePermissions(Request $request, User $employee)
    // {
    //     $employee->permissions = $request->input('permissions');
    //     $employee->save();

    //     return response()->json([
    //         'message' => 'Permissions changed successfully',
    //         'employee' => $employee,
    //     ]);
    // }
}
