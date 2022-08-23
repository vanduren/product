<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailtrapExample extends Mailable
{
    use Queueable, SerializesModels;


    private $products;
    private $categories;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($products, $categories)
    {
        $this->products = $products;
        $this->categories = $categories;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // from is allready set
        // return $this->from('example@example.com', 'Example')
        return $this->subject('Mailtrap Confirmation')
                    ->with([
                        'name' => 'New Mailtrap User',
                        'link' => '/inboxes/',
                        // $products (loaded as parameter) are passed to the view
                        'products' => $this->products,
                        'categories' => $this->categories,
                    ])
                    ->view('emails.products')
                    ->text('emails.products_plain');
    }
}
