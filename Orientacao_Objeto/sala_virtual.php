<?php

class SalaVirtual {
    private $nome;
    private $capacidade;
    private $horario;

    public function __construct($nome, $capacidade, $horario) {
        $this->nome = $nome;
        $this->capacidade = $capacidade;
        $this->horario = $horario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCapacidade() {
        return $this->capacidade;
    }

    public function getHorario() {
        return $this->horario;
    }

    public function infoSala() {
        return "Sala: $this->nome | Capacidade: $this->capacidade | Horário: $this->horario\n";
    }
}

$sala1 = new SalaVirtual("Sala de Reunião A", 10, "10:00 - 12:00");
$sala2 = new SalaVirtual("Sala de Aula B", 20, "14:00 - 16:00");

echo $sala1->infoSala();
echo $sala2->infoSala();
?>
