<?php
    namespace Classes;

    class Carnivoro extends Animal
    {
        public function habitoAlimentar()
        {
            echo "<p>{$this->come}</p>";
        }

        public function setCome($come)
        {
            $this->come = $come;
        }

        public function getCome()
        {
            return $this->come;
        }
    }
?>