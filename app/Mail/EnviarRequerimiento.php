<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Requerimiento;

class EnviarRequerimiento extends Mailable
{
    use Queueable, SerializesModels;
    
    public $requerimiento;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Requerimiento $requerimiento)
    {

        $this->requerimiento = $requerimiento;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.enviar_requerimiento');
    }
}
