@props(['type' => 'success'])

<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    <p>
        {{ $slot }}
    </p>
</div>