<?php

namespace Modules\Doctor\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'doctors';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Doctor\database\factories\DoctorFactory::new();
    }
}
