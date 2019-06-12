<?php
    public function testResultado(): void {
        /*...content...*/
        $this->assertTrue(isset($minhaArray), 'A váriavel $minhaArray não está denifida.');
        $this->assertTrue(is_array($minhaArray), 'A váriavel $minhaArray tem que ser do tipo array.');
    }