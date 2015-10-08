<?php 

class Bird
{
    protected $animalType = "flying_animal";

    public function fly()
    {
        $this->prepareFly();

        return "Bird is flying";
    }

    protected function prepareFly()
    {
        // Prepare something before flying.
    }

    public function attack()
    {
        $this->prepareFly();

        return "Attack !!";
    }
}
