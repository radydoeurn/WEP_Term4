<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $books = Books::list();
        $books = BookResource::collection($books);
        return response(['sucess' => true, 'data' => $books], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        Books::store($request);
        return ["success" => true, "Message" => "This is a book"];
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
        Books::store($request, $id);
        return ["success" => true, "Message" => "Books updated successfully"];

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Books::find($id);
        $books->delete();
        return ["success" => true, "Message" => "Book deleted successfully"];

    }
}
