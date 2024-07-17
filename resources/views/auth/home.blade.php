<h1>Chào mừng, {{ Auth::user()->name }}</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Đăng xuất</button>
</form>
