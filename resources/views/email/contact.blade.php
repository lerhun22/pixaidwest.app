@component('mail::message')

{{ $subject }} :  Nouveau contact message


@component('mail::panel')
{{ $message }}
@endcomponent

@component('mail::button', ['url' => route ('contact') ])
Répondre à cet email
@endcomponent

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
