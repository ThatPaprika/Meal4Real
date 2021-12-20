<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($meal_details)
    {
        $this->type = $meal_details->type;
        $this->meal_name = $meal_details->meal_name;
        $this->description = $meal_details->description;
        $this->address = $meal_details->address;
        $this->picture = $meal_details->picture;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('your_pich_up_meal');

        // Plain text emails are aother choice
        /*
        return $this->view('emails.orders.shipped')
            ->text('emails.orders.shipped_plain');
            */
    }
}
