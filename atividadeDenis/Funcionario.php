<?php

abstract class Funcionario
{

    private int $matricula;
    private string $nome;
    private string $cpf;
    private float $salarioBase;
    private bool $ativo;
    private int $cargaHoraria;

    public function __construct(int $matricula, string $nome, string $cpf, float $salarioBase, bool $ativo, int $cargaHoraria)
    {

        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
        $this->ativo = $ativo;
        $this->cargaHoraria = $cargaHoraria;
    }

    public function admitir(): void
    {

        if ($this->ativo == false) {

         $this->ativo = true;
        }
    }

    public function demitir(): void 
    {
         $this->ativo = false;
    }

    public function aplicarAumento(float $percentual): void
    {

        if ($percentual > 0 && $percentual <= 40) {

            $this->salarioBase += $this->salarioBase * ($percentual / 100);
        }
    }

    abstract function calcularSalario(): float;
    abstract function verificarSituacao(): bool;

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {

        return $this->cpf;
    }

    public function getSalarioBase()
    {

        return $this->salarioBase;
    }

    public function getAtivo()
    {

        return $this->ativo;
    }

    public function getCargaHoraria()
    {
        return $this->cargaHoraria;
    }

    public function setMatricula(int $matricula): void
    {

        $this->matricula = $matricula;
    }

    public function setNome(string $nome)
    {

        $this->nome = $nome;
    }

    public function setCpf(string $cpf)
    {

        $this->cpf = $cpf;
    }

    public function setSalarioBase(float $salarioBase)
    {

        $this->salarioBase = $salarioBase;
    }

    public function setAtivo(bool $ativo)
    {

        $this->ativo = $ativo;
    }

    public function setCargaHoraria(int $cargaHoraria)
    {

        $this->cargaHoraria = $cargaHoraria;
    }
}
