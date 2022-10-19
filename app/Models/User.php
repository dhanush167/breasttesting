<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Scopes\Searchable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;
    use HasFactory;
    use Searchable;
    use HasApiTokens;

    protected $fillable = [
        'user_type',
        'name',
        'email',
        'phone_no',
        'password',
    ];

    protected $searchableFields = ['*'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function isSuperAdmin()
    {
        return $this->hasRole('super-admin');
    }

    /* protected function userType(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["admin", "patient"][$value],
        );
    } */
}
