<div>
    <h2>Listar os Usuários</h2>

    @if (session('success'))
        <p style="color: #082">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('users.create') }}">Cadastrar</a>

</div>
