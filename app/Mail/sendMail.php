<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\order;
use App\Models\card;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order = [];
    public $user = [];
    public $card = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(order $order)
    {
        $user = User::find($order->users_id);
        $card = card::find($order->cards_id);

        $this->order = $order;
        $this->user = $user;
        $this->card = $card;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('gc.geoffrey.c@gmail.com')
                    ->subject("Votre superbe commande")
                    ->view('email.email');
    }
}
