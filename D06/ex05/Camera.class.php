<?php

    class Camera
    {
        static $verbose = false;
        private $_proj;
        private $_tR;
        private $_tT;
        private $_origine;
        private $_width;
        private $_height;
        private $_ratio;

        public function __construct($args)
        {
            $this->_origine = $args['origin'];
            $this->_tT = new Matrix(array('preset' => Matrix::TRANSLATION, 'vtc' => $this->_origine->opposite()));
            $this->_tR = $args['orientation']->transpose();
            $this->_width = (float)$args['width'] / 2;
            $this->_height = (float)$args['height'] / 2;
            $this->_ratio = $this->_width / $this->_height;
            $this->_proj = new Matrix(array(
                'preset' => Matrix::PROJECTION,
                'fov' => $args['fov'],
                'ratio' => $this->_ratio,
                'near' => $args['near'],
                'far' => $args['far']
            ));
            if (Self::$verbose) {
                echo "Camera instance constructed\n";
            }
        }

        public function watchVertex(Vertex $worldVertex){
            $vtx = $this->_proj->transformVertex($this->_tR->transformVertex($worldVertex));
            $vtx->setX($vtx->getX() * $this->_ratio);
            $vtx->setY($vtx->getY());
            $vtx->setColor($worldVertex->getColor());
            return ($vtx);
        }

		public function watchMesh($mesh){
            foreach($mesh as $k => $triangle) {
                $a = $this->watchVertex($triangle[0]);
                $b = $this->watchVertex($triangle[1]);
                $c = $this->watchVertex($triangle[2]);
                $mesh[$k] = array($a, $b, $c);
            }
            return $mesh;
		}
		function __destruct()
        {
            if (Self::$verbose)
                printf("Camera instance destructed" . PHP_EOL);
        }

        function __toString()
        {
            $tmp 	= "Camera( " . PHP_EOL;
            $tmp .= "+ Origine: ".$this->_origine . PHP_EOL;
            $tmp .= "+ tT:\n".$this->_tT . PHP_EOL;
            $tmp .= "+ tR:\n".$this->_tR . PHP_EOL;
            $tmp .= "+ tR->mult( tT ):\n".$this->_tR->mult($this->_tT) . PHP_EOL;
            $tmp .= "+ Proj:\n".$this->_proj."\n)";
            return ($tmp);
        }

        public static function doc()
        {
            return (PHP_EOL . file_get_contents("Camera.doc.txt") . PHP_EOL);
        }
    }