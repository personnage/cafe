<?php

namespace App\Jobs;

use Mail;
use Carbon\Carbon;
use App\Models\Contracts\Confirmable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationToEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $user;

    protected $view;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Confirmable $user, $view = null)
    {
        $this->user = $user;
        $this->view = $view;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = $this->user;

        if (! $user->isConfirmed()) {
            if (is_null($user->confirmation_token) || is_null($user->confirmation_sent_at)) {
                $user->resetConfirmationToken();
                $user->confirmation_sent_at = Carbon::now();
                $user->save();
            }

            $this->sendConfirmation($user);
        }
    }

    protected function sendConfirmation(Confirmable $user)
    {
        $view = $this->view ?? 'auth.emails.confirmation';

        Mail::send($view, compact('user'), function($message) use ($user) {
            $message->from('noreply@allcafe.ru', 'AllCafe Application');

            $message->to($user->getEmailForConfirmation(), $user->name)
              ->subject('Confirmation instructions');
        });
    }
}
