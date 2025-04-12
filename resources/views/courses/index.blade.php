<div>
    <h2>Listar os Cursos</h2>

    @if (session('success'))
        <p style="color: #082">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('courses.create') }}">Cadastrar Curso</a><br>
</div>
