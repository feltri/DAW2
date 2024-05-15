<?php

namespace Sisfin\Controllers;
use Sisfin\Controller;
use Sisfin\Models\AlunoService;

class AlunoController extends Controller
{
    private AlunoService $alunoService;

    public function __construct(){
        $this->_alunoService = new AlunoService();
    }

    public function getByTurma(){
        $_turma = $_GET['turma'];
        $alunos = array_filter($this->_alunoService->getAll(), function($k) use ($_turma) {
             return $k->getTurma()==strtoupper($_turma);
        }, ARRAY_FILTER_USE_BOTH);
        $this->render('aluno/index', ['alunos' => $alunos]);
     }

     public function getById(int $id): array{
        return $this->clienteRepository->getById($id);
    }

    public function getAll() {
        $alunos = $this->alunoService->getAll();
        include 'views/aluno/index.php';
    }


    public function index(): void
    {
        $this->render('cliente/index', ['clientes' => $this->getAll()]);
    }

}
