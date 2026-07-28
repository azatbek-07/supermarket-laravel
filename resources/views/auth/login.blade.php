<div>
    <form action="{{ route('login.post') }}" method="POST">
    @csrf
    <input type="email" name="email">
    <input type="password" name="password">
    <button>Yuborish</button>
    </form>
</div>