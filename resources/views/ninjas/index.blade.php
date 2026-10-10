<x-layout>
    <h2>Available Ninjas</h2>

    @if ($greeting === 'hello')
    <p>Hi from inside if statemnet</p>
    @endif

    <ul>
        @foreach ($ninjas as $ninja)
        <li>
            <p>{{ $ninja['name'] }}</p>
            <a href="/ninjas/{{ $ninja['id'] }}">{{ $ninja['name'] }}</a>
        </li>
        @endforeach
    </ul>
</x-layout>