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
            $this->_x = $args['x'];
            $this->_y = $args['y'];
            $this->_z = $args['z'];
            if (array_key_exists('w', $args) && !empty($args['w']))
                $this->_w = $args['w'];
            if (array_key_exists('color', $args) && !empty($args['color']) && $args['color'] instanceof Color) {
                $this->_color = $args['color'];
            } else {
                $this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
            }
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
                return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )", array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue)));
            return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
        }
		
		public static function doc()
        {
			return ("\n" . file_get_contents("Vertex.doc.txt") . PHP_EOL);
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