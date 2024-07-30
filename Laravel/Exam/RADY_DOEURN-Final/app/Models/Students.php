<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use HasFactory, SoftDeletes;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email'
    ];

    public static function list()
    {
        $data = self::all();
        return $data;
    }

    public static function store($request, $id = null)
    {
        $data = $request->only('name', 'email');
        $data = self::updateOrCreate(['id' => $id], $data);
    }
}
