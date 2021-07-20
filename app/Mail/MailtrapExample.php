<?php
namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class MailtrapExample extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $request;
    public function __construct(Request $request)
    {
        //
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('longguo1130@outlook.com', 'Fortuna Team')
            ->subject('Invitation')
            ->markdown('users.invite_email')
            ->with([
                'name' => $this->request->name,
                'message'=>$this->request->description,
                'link' => 'https://mailtrap.io/inboxes'
            ]);
    }
}
