@component('mail::message')
# Order created successfully

We recieved your order. 
As soon as we check availability of articles, we will send you confirmation email.


@component('mail::table')
| Title | Amount | Price |
| :------------ |-------------:| --------:|
@foreach ($order->articles as $article)
| {{ $article->title }} | {{ $article->pivot->amount }} | {{ $article->pivot->price }} |
@endforeach

@endcomponent


@component('mail::button', ['url' => url($order->user->orderPath($order->id))])
View order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
