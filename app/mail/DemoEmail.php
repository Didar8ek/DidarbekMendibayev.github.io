<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class Labmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->from('190103094@stu.sdu.edu.kz')
                    ->view('mails.demo')
                    ->text('mails.demo_plain')
                    ->with([
                        'testVarOne' => '1',
                        'testVarTwo' => '2',
                    ]);
    }
}