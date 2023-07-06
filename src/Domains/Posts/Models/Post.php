<?php
namespace Domains\Posts\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $table = "posts";

    protected $fillable = [
        "name",
        "description"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];


}
