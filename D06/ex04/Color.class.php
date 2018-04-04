<?php
    class Color
    {
        public $red;
        public $green;
        public $blue;
        static $verbose = false;

        public function __construct(array $args)
        {
			if (array_key_exists('red', $args) &&
				array_key_exists('green', $args) &&
				array_key_exists('blue', $args))
			{
                $this->red = intval($args['red']);
                $this->green = intval($args['green']);
                $this->blue = intval($args['blue']);
			}
			else if (array_key_exists('rgb', $args))
			{
                $rgb = intval($args['rgb']);
				$this->red = ($args['rgb'] >> 16) % 256;
				$this->green = ($args['rgb'] >> 8) % 256;
				$this->blue = $args['rgb'] % 256;
            }
			if (Self::$verbose)
				print("$this constructed." . PHP_EOL);
        }

        function __destruct()
        {
			if (Self::$verbose)
				print("$this destructed." . PHP_EOL);
        }

        public function add($Color)
        {
			return (new Color(array(
				'red' => $this->red + $Color->red,
				'green' => $this->green + $Color->green,
				'blue' => $this->blue + $Color->blue
			)));
        }

        public function sub($Color)
        {
            return (new Color(array(
				'red' => $this->red - $Color->red,
				'green' => $this->green - $Color->green,
				'blue' => $this->blue - $Color->blue
			)));
        }

        public function mult($mult)
        {
            return (new Color(array(
				'red' => $this->red * $mult,
				'green' => $this->green * $mult,
				'blue' => $this->blue * $mult
			)));
        }

        function __toString()
        {
            return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
        }

        public static function doc()
        {
			return (PHP_EOL . file_get_contents("Color.doc.txt") . PHP_EOL);
        }
	}
?>