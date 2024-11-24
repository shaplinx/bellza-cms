<?php

namespace Modules\Testimony\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimony extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'testimonies';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Testimony\database\factories\TestimonyFactory::new();
    }

        /**
     * Get the list of Recently Published Articles.
     *
     * @param [type] $query [description]
     * @return [type] [description]
     */
    public function scopeRecentlyPublished($query)
    {
        return $query->orderBy('updated_at', 'desc')->orderBy('created_at', 'desc');
    }
}
