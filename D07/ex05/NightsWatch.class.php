<?php
    class NightsWatch implements IFighter
    {

        private $fighter = array();

        public function recruit($s)
        {
            $this->fighter[] = $s;
        }

        function fight()
        {
            foreach ($this->fighter as $s) {
                if (method_exists(get_class($s), 'fight'))
                    $s->fight();
            }
        }
	}
?>