@props(['highlight' => false])

<div @class(['highlight bg-blue-500' => $highlight, 'card border border-black']) class="card">
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn">View Details</a>
</div>