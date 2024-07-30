<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Students;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::list();        
        $students = StudentResource::collection($students);        
        return response(['sucess' => true, 'data' => $students], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Students::store($request);
        return ["success" => true, "Message" => "This is a student"];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Students::store($request, $id);
        return ["success" => true, "Message" => "Student updated successfully"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Students::find($id);
        $students->delete();
        return ["success" => true, "Message" => "Student deleted successfully"];
    }
}
