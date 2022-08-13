@component('mail::message')
# {{ $mailData['title'] }}

The body of your message.



Thanks,<br>
{{ config('app.name') }}
@endcomponent