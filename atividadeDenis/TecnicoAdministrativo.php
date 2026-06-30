<?php

require_once 'Funcionario.php';

class TecnicoAdministrativo extends Funcionario
{

    private string $setor;
    private float $adicionalInsalubridade;
    private string $nivel;
    private string $turno;


    public function __construct(int $matricula, string $nome, string $cpf, float $salarioBase, bool $ativo, int $cargaHoraria, string $setor, float $adicionalInsalubridade, string $nivel, string $turno)
    {

        parent::__construct($matricula, $nome, $cpf, $salarioBase, $ativo, $cargaHoraria);

        $this->setor = $setor;
        $this->adicionalInsalubridade = $adicionalInsalubridade;
        $this->nivel = $nivel;
        $this->turno = $turno;
    }

    public function calcularSalario(): float
    {

        if ($this->turno == "Noturno") {

            return ($this->getSalarioBase() * 1.20) + $this->adicionalInsalubridade;
        } else {

            return $this->getSalarioBase() + $this->adicionalInsalubridade;
        }
    }

    public function verificarSituacao(): bool
    {

    return $this->getAtivo();
    }

    public function calcularAdicional(): float
    {

        return $this->adicionalInsalubridade;
    }

    public function gerarCracha(): string
    {

        $textoHash = $this->getMatricula() . $this->getNome() . $this->setor;
        $md5 = md5($textoHash);

        return "Cracha gerado: " . $md5;
    }
}
