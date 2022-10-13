<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FollowupReason extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['reason'];

    protected $searchableFields = ['*'];

    protected $table = 'followup_reasons';

    public function patienFollowups()
    {
        return $this->hasMany(PatienFollowup::class);
    }
}
