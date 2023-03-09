<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'address',
        'phone_number',
        'pay_date',
        'due_date',
    ];
    protected $guarded = ['id'];

    public function fieldsWithValue() {
        return [
            'Nome' => $this->name,
            'E-mail' => $this->email,
            'Data de nascimento' => $this->birth_date,
            'Endereço' => $this->address,
            'Telefone' => $this->phone_number,
            'Data de Pagamento' => $this->pay_date,
            'Data de Validade' => $this->due_date,
        ];
    }
}