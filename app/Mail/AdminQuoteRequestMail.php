<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminQuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quoteRequest;
    public $filePath;

    public function __construct($quoteRequest, $filePath = null)
    {
        $this->quoteRequest = $quoteRequest;
        $this->filePath = $filePath;
    }

    public function build()
    {
        $email = $this->view('email.admin-quote-request')
                    ->subject('New Quote Request')
                    ->with(['quoteRequest' => $this->quoteRequest]);
        
        if ($this->filePath) {
            $email->attach(storage_path('app/public/' . $this->filePath));
        }

        return $email;
    }
}