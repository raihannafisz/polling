{{-- navbar --}}
<nav>
    <h4>ini navbar</h4>
    <a href="/home">Home</a> <br>
    <a href="/polls/make">Buat Polling</a> <br>
    <a href="/polls">Terbaru</a><br>
    <a href="/polls/search">Cari</a><br>

    <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>


    <p>User yang login: {{ $user->name }}</p>
</nav>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1>My Polling</h1>
                @foreach ($polls as $poll)
                    <div class="p-6 text-gray-900">
                        <a href="/make"></a>
                        <h3>{{ $poll->title }}</h3>
                        <p>{{ $poll->description }}</p>
                    </div>
                @endforeach
            </div>

            {{-- jika belum membuat poll --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1>Popular polls (if not)</h1>
                @foreach ($populars as $popular)
                    <div class="p-6 text-gray-900">
                        <a href="/make"></a>
                        <h3>{{ $popular->title }}</h3>
                        <p>{{ $popular->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<div>

</div>
