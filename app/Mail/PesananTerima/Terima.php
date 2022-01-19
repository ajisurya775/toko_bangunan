<?php

namespace App\Mail\PesananTerima;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Terima extends Mailable
{
    use Queueable, SerializesModels;

    private $checkout;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Pesanan Diterima : Berhasil")->markdown('emails.Pesanan.Terima',[
            'checkout' =>$this->checkout
        ]);
    }
}
