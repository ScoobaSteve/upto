@component('mail::message')
# Introduction

The body of your message.

{{ $data['name'] }}
{{ $data['email'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
