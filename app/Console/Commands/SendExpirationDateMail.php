<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Student;
use Carbon\Carbon;
use App\Mail\ExpirationDateEmail;
use Illuminate\Support\Facades\Mail;

class SendExpirationDateMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:expirationDate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email every time the expiration date for student payment is due the next day.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   

        $students = Student::whereDate('due_date' , Carbon::tomorrow())->get();
        // $students = Student::All();
        foreach ($students as $student) 
        {    
            $email = new ExpirationDateEmail(
                $student->name
            );
            $email->subject = 'Vencimento da Matrícula';
            $studentEmail = $student->email;
            Mail::to($studentEmail)->send($email);    
        }
    }
}