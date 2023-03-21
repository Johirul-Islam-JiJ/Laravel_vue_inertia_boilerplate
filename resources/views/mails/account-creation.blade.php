@component('mail::message')
# Account Created

Dear {{ $user->name }},<br>
we have created an account so that you can access our online platform.

### Account Details:
User ID: {{ $user->email }}<br>
Password: {{ $password }}

@component('mail::button', ['url' => route('login')])
    Visit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
