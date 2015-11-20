<?php 

trait CanAttack {

    public function attack()
    {
        $weapon = $this->weapon;
        $atk = $this->atk;
        $additional = [
            'claw' => 10,
            'poison' => 15,
            'beak' => 20,
        ];

        // Default additional attack is 5
        $atk += isset($additional[$this->weapon]) ?
            $additional[$this->weapon] : 5;

        return "Attack to enemy with: " . $weapon . ", damage: " . $atk;
    }
}
