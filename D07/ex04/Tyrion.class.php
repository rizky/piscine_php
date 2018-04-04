<?php
    class Tyrion
    {
        public function sleepWith($a)
        {
            if ($a instanceof Jaime)
                print("Not event if I'm drunk !" .PHP_EOL);
            else if ($a instanceof Sansa)
                print("Let's do this." .PHP_EOL);
            else if ($a instanceof Cersei)
                print("Not event if I'm drunk !" .PHP_EOL);
        }
	}
?>