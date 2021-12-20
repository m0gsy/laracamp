@component('mail::message')
# Your Transaction Has Been Confirmed

Hi!, {{ $checkout->User->name}}
<br>
Your transaction has been confirmed, now you can enjoy the benefits of <b>{{ $checkout->Camp->title }} camp.</b>


@component('mail::button', ['url' => route('user.dashboard')])
My Dahboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
