@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="events-list">
                    @foreach ($orders as $order)
                        <tr>
                            <td>
                                <div class="event-date">
                                    <div class="event-day">{{ $order->created_at->format('d') }}</div>
                                    <div class="event-month">{{ $order->created_at->format('M') }}</div>
                                </div>
                            </td>
                            <td>
                                {{ $order->user->name }}
                            </td>
                            <td>
                                OR{{ lPad($order->id) }}
                            </td>
                            <td class="event-venue hidden-xs"><i class="icon-map-marker"></i> {{ $order->user->address }}</td>
                            <td class="event-price hidden-xs">{{ formatedPrice($order->total_price) }} RSD</td>
                            <td>
                                {{-- <form action="/profiles/{{ $order->user_id }}/orders/{{ $order->id }}" method="GET">
                                    @csrf --}}
                                    <a href="/profiles/{{ $order->user_id }}/history/{{ $order->id }}" class="btn btn-grey btn-sm event-more">Read More</a>
                                {{-- </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection