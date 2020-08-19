@extends('layouts.app')

@section('content')
<div class="container blog-post" style="margin-left: auto; margin-right: auto;">
    <table class="table responsive">
        <tbody>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Manufacturer</th>
            <th>Description</th>
            <th>Item code</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Tax</th>
        @foreach ($articles as $article)
            <tr>
                <td class="align-middle">{{ $article->id }}</td>
                <td style="padding: 0px; width: 50px; height: 50px;">
                    <a href="#">
                        <img class="shop-item-image" style="padding: 3px;"
                            src="{{ file_exists(public_path().asset('/images/'). $article->image) ?
                            asset('/images').'/'. $article->image :
                            asset('/images'). '/no-image.png'  }}" alt="{{ $article->title }}">
                    </a>
                </td>
                <td class="align-middle">{{ $article->title }}</td>
                <td class="align-middle">{{ $article->manufacturer }}</td>
                <td class="align-middle">{{ $article->description }}</td>
                <td class="align-middle">{{ $article->code }}</td>
                <td class="align-middle">{{ $article->price }}</td>
                <td class="align-middle">{{ $article->amount }}</td>
                <td class="align-middle text-center">
                    <input type="checkbox" 
                    {{ $article->active ? 'checked' : '' }}>
                </td>
                <td class="align-middle">{{ $article->tax }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection