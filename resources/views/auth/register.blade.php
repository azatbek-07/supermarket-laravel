<form action="{{ route('register.post') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Ism">

    <input type="email" name="email" placeholder="Email">

    <input type="password" name="password" placeholder="Parol">

    <input type="password" name="password_confirmation" placeholder="Parolni tasdiqlang">

    <button type="submit">Ro'yxatdan o'tish</button>
</form>