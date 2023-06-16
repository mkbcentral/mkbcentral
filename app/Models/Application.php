<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    use HasFactory;
    protected $fillable=['name','description','image','detail','application_category_id','url'];

    /**
     * Get the ApplicationCategory that owns the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ApplicationCategory(): BelongsTo
    {
        return $this->belongsTo(ApplicationCategory::class, 'application_category_id');
    }
}
