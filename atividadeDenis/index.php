<?php

require_once 'Funcionario.php';
require_once 'Professor.php';
require_once 'TecnicoAdministrativo.php';

function quebrarLinha() {
    echo PHP_SAPI === 'cli' ? "\n" : "<br>";
}

echo "=== INICIANDO TESTES DO SISTEMA DE FUNCIONÁRIOS ===";
quebrarLinha();
quebrarLinha();

// -----------------------------------------------------------------
// TESTE 1: Instanciando e testando o Professor
// -----------------------------------------------------------------
echo "--- Testando o Professor ---";
quebrarLinha();

$professor = new Professor(
    101,            // matricula
    "Carlos Silva", // nome
    "111.222.333-44", // cpf
    4000.00,        // salarioBase
    true,           // ativo
    40,             // cargaHoraria
    "Doutorado",    // titulacao
    20,             // horasAula
    50.00,          // valorHoraAula
    true            // coordenador (Sim, é coordenador)
);

// Aplicando um aumento válido de 10% sobre o salário base (R$ 4.000,00 -> R$ 4.400,00)
$professor->aplicarAumento(10);

echo $professor->gerarRelatorio();
quebrarLinha();
echo "Bônus de Titulação: R$ " . $professor->calcularBonus();
quebrarLinha();
echo "Situação Atual (Ativo?): " . ($professor->verificarSituacao() ? "Sim" : "Não");
quebrarLinha();
quebrarLinha();


// -----------------------------------------------------------------
// TESTE 2: Instanciando e testando o Técnico Administrativo
// -----------------------------------------------------------------
echo "--- Testando o Técnico Administrativo ---";
quebrarLinha();

$tecnico = new TecnicoAdministrativo(
    202,                  // matricula
    "Ana Souza",          // nome
    "555.666.777-88",     // cpf
    3000.00,              // salarioBase
    true,                 // ativo
    40,                   // cargaHoraria
    "Secretaria Acadêmica", // setor
    400.00,               // adicionalInsalubridade
    "Pleno",              // nivel
    "Noturno"             // turno (Ganha +20% sobre o salário base)
);

echo "Nome: " . $tecnico->getNome();
quebrarLinha();
echo "Salário Calculado (Base + 20% Noturno + Insalubridade): R$ " . $tecnico->calcularSalario();
quebrarLinha();
echo $tecnico->gerarCracha();
quebrarLinha();
quebrarLinha();

// -----------------------------------------------------------------
// TESTE 3: Testando Demissão e Admissão
// -----------------------------------------------------------------

echo "--- Testando Mudança de Situação (Demissão) ---";
quebrarLinha();

echo "Antes - Ana está ativa? " . ($tecnico->verificarSituacao() ? "Sim" : "Não");
quebrarLinha();

$tecnico->demitir();

echo "Depois - Ana está ativa? " . ($tecnico->verificarSituacao() ? "Sim" : "Não");
quebrarLinha();