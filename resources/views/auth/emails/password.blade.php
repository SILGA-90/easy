Click here to reset your password: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($users->getEmailForPasswordReset()) }}"> {{ $link }} </a>
