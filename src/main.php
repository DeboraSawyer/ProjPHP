<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINEMA</title>
</head>

<body>
    <h1>Programação em Cartaz</h1>
    <?php

    class Cinema
    {
        // Propriedades: $nome, $endereco e $sessoes.
        public $nome; // Dentro da class as variáveis são chamadas de propriedades.
        public $endereco;
        public $sessoes = [];

        // Métodos.
        // A função é chamada de método.
        //__construct: Cria novos objetos, também pode substituir os antigos métodos construtores que eram implementados lenvando o mesmo nome da classe à qual pertencia.
        public function __construct($nome, $endereco)
        {
            $this->nome = $nome;
            $this->endereco = $endereco;
        }

        public function adicionarSessao(
            $filme,
            $horario
        ) {
            $this->sessoes[] = [
                // =>: Atribui valores para chaves de matrizes [arrays].
                'filme' => $filme,
                'horario' => $horario
            ];
        }

        public function listarSessoes()
        {
            $lista = "Sessões no {$this->nome}:\n";
            // foreach: Estrutura de repetição, percorre todos os itens da coleção.
            foreach ($this->sessoes as $sessao) {
                // .=: Adiciona um novo texto a um já existente na variável. É o mesmo que ($pipoca = $doce . "pipoca doce.").
                $lista .= "- Filme: {$sessao['filme']}, Horário: {$sessao['horario']}\n";
            }
            return $lista;
        }
    }

    // Instância: $cinema.
    // new: Usado para criação de objetos de uma classe.
    $cinema = new Cinema("Cinemark", "Av. Pres. Juscelino Kubitschek, 2041");

    // Sessões de filme.
    $cinema->adicionarSessao("Barbie", "14:00.");
    $cinema->adicionarSessao("Oppenheimer", "13:30.");
    $cinema->adicionarSessao("Missão Impossível: Acerto de Contas Parte 1", "15:45.");

    // Métodos da classe Cinema.
    echo $cinema->listarSessoes();
    echo "<br>";
    echo "<br>";

    // Localidade do cinema.
    echo "Endereço: {$cinema->endereco}";
    ?>
</body>

</html>