@component('mail::message')
# Introduction

The body of your message.

<p>{{$data['name']}} ({{$data['email']}})</p>
------
<p>{{$data['message']}}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
