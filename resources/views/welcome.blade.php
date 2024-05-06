{{-- navbar --}}
<nav>
    <h4>ini navbar</h4>
    <a href="/home">Home</a> <br>
    <a href="/make">Buat Polling</a> <br>
    <a href="/new">Terbaru</a><br>
    <a href="/search">Cari</a><br>
    <a href="/login">login</a><br>
    <a href="/register">regis</a><br>
</nav>

{{-- jumbotron --}}

{{-- menampilkan poll populer --}}
<h1>Polling paling populer</h1> <br><br>
@foreach ($polls as $poll)
    <h5>{{ $poll->title }}</h5>
    <p>{{ $poll->description }}</p>
@endforeach