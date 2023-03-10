<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time', 
        'end_time', 
        'price', 
        'user_id', 
        'student_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // public function fieldsWithValue()
    // {
    //     return [
    //         'Nome do Aluno' => $this->user->name,
    //         'Nome do Funcionário' => $this->student->name,
    //         'Hora de Início' => $this->start_time,
    //         'Hora de Término' => $this->end_time,
    //         'Preço' => $this->price,
    //     ];
    // }
}