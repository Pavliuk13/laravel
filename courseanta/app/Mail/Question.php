<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use function Symfony\Component\Translation\t;

class Question extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $surname;
    public $email;
    public $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $surname, $email, $text)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('question', ['name' => $this->name, 'surname' => $this->surname, 'email' => $this->email, 'text' => $this->text]);
    }
}
