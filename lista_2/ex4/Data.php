<?php

    class Data {
        private int $dia;
        private int $mes;
        private int $ano;

        public function __construct($d=0, $m=0, $a=0)
        {
            $this->dia = $d;
            $this->mes = $m;
            $this->ano = $a;
        }

        // Getters
        public function getDia() 
        {
            return $this->dia;
        }

        public function getMes() 
        {
            return $this->mes;
        }

        public function getAno() 
        {
            return $this->ano;
        }

        // Setters
        public function setDia($d) 
        {
            $this->dia = $d;
        }

        public function setMes($m) 
        {
            $this->mes = $m;
        }

        public function setAno($a) 
        {
            $this->ano = $a;
        }

        // Funções
        // => usado para array, -> indicar que vai acessar o conteúdo

        public function passarDia() 
        {
            $this->dia++;
        }

        public function voltarDia() 
        {
            $this->dia++;
        }

        public function mostrarData() 
        {
            return "{$this->dia} / {$this->mes} / {$this->ano}";
        }

        public function ehBissexto() 
        {
            if ($this->ano / 400 == 0 || $this->ano / 4 == 0 || $this->ano / 100 != 0)
                return true;
            else
                return false;
        }

        public function iguaisDatas($d, $m, $a) 
        {
            if ($this->dia == $d && $this->mes == $m && $this->ano == $a)
                return 0;
            else if ()
        }

        public function subtrairDatas($dSubtrair, $mSubtrair, $aSubtrair) 
        {
            
            $difDia = $this->dia - $dSubtrair;
            $difMes = $this->mes - $mSubtrair;
            $difAno = $this->ano - $aSubtrair;
        }



    }
