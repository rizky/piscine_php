<?php
    require_once 'Color.class.php';

    class Vertex
    {
        private $_x;
        private $_y;
        private $_z;
        private $_w = 1;
        private $_color;
        static $verbose = false;

        public function __construct($args)
        {
			if (array_key_exists('x', $args))
				$this->_x = $args['x'];
			if (array_key_exists('y', $args))
				$this->_y = $args['y'];
			if (array_key_exists('z', $args))
            	$this->_z = $args['z'];
            if (array_key_exists('w', $args))
                $this->_w = $args['w'];
            if (array_key_exists('color', $args) && $args['color'] instanceof Color)
                $this->_color = $args['color'];
            else
                $this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
            if (Self::$verbose)
				print("$this constructed" . PHP_EOL);
        }

        function __destruct()
        {
            if (Self::$verbose)
				print("$this destructed" . PHP_EOL);
        }

        function __toString()
        {
            if (Self::$verbose)
                return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, $this->_color )", array($this->_x, $this->_y, $this->_z, $this->_w)));
            return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
        }
		
		public static function doc()
        {
			return (PHP_EOL . file_get_contents("Vertex.doc.txt") . PHP_EOL);
        }

        public function getX()
        {
            return $this->_x;
        }

        public function setX($x)
        {
            $this->_x = $x;
        }

        public function getY()
        {
            return $this->_y;
        }

        public function setY($y)
        {
            $this->_y = $y;
        }

        public function getZ()
        {
            return $this->_z;
        }

        public function setZ($z)
        {
            $this->_z = $z;
        }

        public function getW()
        {
            return $this->_w;
        }

        public function setW($w)
        {
            $this->_w = $w;
        }

        public function getColor()
        {
            return $this->_color;
        }

        public function setColor($color)
        {
            $this->_color = $color;
        }
	}
?>