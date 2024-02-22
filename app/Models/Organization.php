<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use UsesUuid;

    protected $table = 'organizations';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
