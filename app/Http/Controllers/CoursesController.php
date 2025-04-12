<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    // Listar os cursos
    public function index()
    {
       // Carregar a View
        return view('courses.index');
    }

    // carregar formulário cadastrar novo curso
    public function create()
    {
        // Carregar a View
        return view('courses.create');
    }

    // cadastrar no banco de dados
    public function store(Request $request)
    {
        // Cadastrar no banco de dados da tabela courses
        Course::create([
            'name' => $request->name,
        ]);

        // redirecionar o usuário e enviar mensagem de sucesso
        return redirect()->route('courses.index')->with('success', 'Curso Cadastrado Com Sucesso!');

    }
}
