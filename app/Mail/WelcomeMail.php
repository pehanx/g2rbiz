<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name, $surname, $phone, $email, $questions, $for_company;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $surname, $phone, $email, $questions, $for_company)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->email = $email;
        $this->questions = $questions;
        $this->for_company = $for_company;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.welcome')
                    ->with([
                        'name'=>$this->name,
                        'surname'=>$this->surname,
                        'phone'=>$this->phone,
                        'email'=>$this->email,
                        'questions'=>$this->questions,
                        'for_company'=>$this->for_company,
                    ])
                    ->subject('Заявка с сайта G2R.biz');
    }
}
