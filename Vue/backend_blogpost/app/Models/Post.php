<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'body'
    ];
    public static function list()
    {
        $data = self::all();
        return $data;
    }
    public static function store($request, $id = null)
    {
        $data = $request->only('id', 'title', 'body');
        $data = self::updateOrCreate(['id' => $id], $data);
    }

}
