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
            $this->dia--;
        }

        public function mostrarData() 
        {
            return "{$this->dia} / {$this->mes} / {$this->ano}";
        }

        public function ehBissexto() 
        {
            if ($this->ano / 400 == 0 || $this->ano / 4 == 0 && $this->ano / 100 != 0)
                return true;
            else
                return false;
        }

        public function iguaisDatas($d, $m, $a) 
        {
            /*
                Timestamp (carimbo de data/hora): representação numérica de um momento específico no tempo.
                -> Calculado a partir de uma data de referência chamada Unix Epoch, que corresponde a 1º de janeiro de 1970, às 00:00:00 (UTC – Coordinated Universal Time).
            */
            $dataParametro = strtotime("$d-$m-$a");
            $dataObjeto = strtotime("$this->dia-$this->mes-$this->ano");
            if ($dataObjeto == $dataParametro)
                return 0;
            else if ($dataObjeto > $dataParametro)
                return 1;
            else
                return -1;
        }

        public function subtrairDatas($dSubtrair, $mSubtrair, $aSubtrair) 
        {
            
            $difDia = $this->dia - $dSubtrair;
            $difMes = $this->mes - $mSubtrair;
            $difAno = $this->ano - $aSubtrair;
        }



    }
