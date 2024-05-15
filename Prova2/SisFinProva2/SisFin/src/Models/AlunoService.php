<?php

namespace Sisfin\Models;

class AlunoService
{
    private $_alunoRepository;

    /**
     * @param $_alunoRepository
     */
    public function __construct()
    {

        $this->_alunoRepository = array();
        $this->save(new Aluno('201096', 'Monique Feltri', '4TDSMN'));
        $this->save(new Aluno('201113', 'Andrey Dalosto', '4TDSMN'));
        $this->save(new Aluno('201102', 'Bruna Souza', '4TDSMN'));
        $this->save(new Aluno('201024', 'Bruno Oliveira', '4TDSMN'));


        return $this;
    }

    
    public function getAll() {
        $alunos = $this->alunoService->getAll();
        // Chamar a view passando a lista de alunos
        include 'views/aluno/index.php';
    }
    
    
}

