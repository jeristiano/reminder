<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 * @package App\Models
 */
class Subscription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'user_id',
        'tag_ids',
        'hours',
        'minutes',
    ];

//    protected $dates = [
//        'pushed_time',
//    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author ()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    /**
     * @param $value
     */
    public function getTagIdsAttribute ($value)
    {
       return  $this->attributes['tag_ids'] = explode(',', $value);

    }


}
