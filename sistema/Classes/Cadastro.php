<?php
    namespace Classes;

    class Cadastro
    {
        private $nome;
        private $telefone;
        private $email;

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;
        }

        public function inserir()
        {
            $db = new \PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
            $db->exec("INSERT INTO cadastro (nome, telefone, email) VALUES ('{$this->nome}', '{$this->telefone}', '{$this->email}')");
            $db = null;
        }

        public function exibir()
        {
            echo "<h1> Usuários </h1>";

            echo '<p><a href="/">Cadastrar</a></p>';
        
            echo '
            <style>
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                    padding: 5px;
                }
            </style>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
            ';
        
            $db = new \PDO("mysql:host=127.0.0.1;dbname=sistema", "root", "");
            $result = $db->query("SELECT * FROM cadastro");
        
            if ($result) {
                foreach ($result as $linha) {
                    echo "
                    <tr>
                        <td>{$linha['codigo']}</td>
                        <td>{$linha['nome']}</td>
                        <td>{$linha['telefone']}</td>
                        <td>{$linha['email']}</td>
                    </tr>
                    ";
                }
            }
        
            echo "</table>";
        }
    }
?>