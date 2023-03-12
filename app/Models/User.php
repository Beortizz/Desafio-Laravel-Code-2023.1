<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Student;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birth_date',
        'address', 
        'telephone',
        'permission',
        'phone_number',
        'enter_hour',
        'leave_hour',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }


    public function fieldsWithValue() {
        return [
            'Nome' => $this->name,
            'E-mail' => $this->email,
            'Data de nascimento' => $this->birth_date,
            'Endereço' => $this->address,
            'Telefone' => $this->phone_number,
            'Horário de Entradas' => explode(' ', $this->enter_hour)[1],
            'Horário de Saída' => explode(' ', $this->leave_hour)[1],
        ];
    }
}