<?php

    class Triangle
    {
        static $verbose = false;
        private $_a;
        private $_b;
        private $_c;

        public function __construct($a, $b, $c)
        {
            if ($a instanceof Vertex && $b instanceof Vertex && $c instanceof Vertex) {
                $this->_a = $a;
                $this->_b = $b;
                $this->_c = $c;
            } else {
                $this->__destruct();
            }
        }

        function __destruct()
        {
            if (Self::$verbose)
                echo "delete triangle\n";
        }

        function __toString()
        {
			if (Self::$verbose)
			{
				Vertex::$verbose;
				return (vsprintf("Triangle( $this->_a\n, $this->_b\n, $this->_c\n )"));
			}
            return (vsprintf("Triangle( $this->_a\n, $this->_b\n, $this->_c\n )"));
        }

        public static function doc()
        {
			return (PHP_EOL . file_get_contents("Triangle.doc.txt") . PHP_EOL);
        }

        public function getA()
        {
            return $this->_a;
        }

        public function getB()
        {
            return $this->_b;
        }

        public function getC()
        {
            return $this->_c;
        }


    }