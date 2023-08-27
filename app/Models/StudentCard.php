<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Enums\SchoolEnum;
use App\Models\User;

class StudentCard extends Model
{
    use HasFactory;

    protected $casts = [
        'school' => SchoolEnum::class,
        'is_internal' => 'boolean',
        'date_of_birth' => 'date'
    ];


    /**
    * @return BelongsTo<User, StudentCard>
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
