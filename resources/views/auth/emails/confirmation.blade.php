You can confirm your account through the link below: <a href="{{ $link = url('confirmation', $user->confirmation_token).'?email='.urlencode($user->getEmailForConfirmation()) }}"> {{ $link }} </a>
