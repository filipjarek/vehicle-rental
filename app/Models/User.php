<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [

        'employee_id',
        'name',
        'email',
        'role',
        'password',
        'status',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [

        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [

        'email_verified_at' => 'datetime',

    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [

        'profile_photo_url',

    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function isSelectedRole(string $role): bool
    {
        return $this->hasRole() && $this == $role;
    }

    public function hasRole(): bool
    {
        return !is_null($this->role);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function isSelectedEmployee(int $employee_id): bool
    {
        return $this->hasEmployee() && $this->employee->id == $employee_id;
    }

    public function hasEmployee(): bool
    {
        return !is_null($this->employee);
    }
}
