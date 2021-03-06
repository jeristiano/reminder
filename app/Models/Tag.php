<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App\Models
 */
class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function note ()
    {
        return $this->hasMany(Note::class);
    }

    /**
     * @return mixed
     */
    public static function getTotalTags ($user_id,$limit=50)
    {
        return self::where('user_id',$user_id)
            ->limit($limit)
            ->pluck('name','id');
    }
}
