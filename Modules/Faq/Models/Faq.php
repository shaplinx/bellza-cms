<?php

namespace Modules\Faq\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'faqs';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Faq\database\factories\FaqFactory::new();
    }
}
