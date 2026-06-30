<?php

require_once 'Funcionario.php';

class Professor extends Funcionario
{

    private string $titulacao;
    private int $horasAula;
    private float $valorHoraAula;
    private bool $coordenador;


    public function __construct(int $matricula, string $nome, string $cpf, float $salarioBase, bool $ativo, int $cargaHoraria, string $titulacao, int $horasAula, float $valorHoraAula, bool $coordenador)
    {

        parent::__construct($matricula, $nome, $cpf, $salarioBase, $ativo, $cargaHoraria);

        $this->titulacao = $titulacao;
        $this->horasAula = $horasAula;
        $this->valorHoraAula = $valorHoraAula;
        $this->coordenador = $coordenador;
    }

    public function calcularSalario(): float
    {

        if ($this->coordenador == true) {

            return $this->getSalarioBase() + 1500.0 + ($this->horasAula * $this->valorHoraAula);
        } else {

            return $this->getSalarioBase() + ($this->horasAula * $this->valorHoraAula);
        }
    }

    public function verificarSituacao(): bool
    {
        return $this->getAtivo();
    }

    public function calcularBonus(): float
    {

        if ($this->titulacao == "Doutorado") {

            return 2000.0;
        } else if ($this->titulacao == "Mestrado") {

            return 1000.0;
        } else {

            return 500.0;
        }
    }


    public function gerarRelatorio(): string
    {

        return "Matricula: " . $this->getMatricula() . "<br>" . "Nome: " . $this->getNome() . "<br>" . "Titulação: " . $this->titulacao . "<br>" . "Salario Base: " . $this->calcularSalario();
    }
}
