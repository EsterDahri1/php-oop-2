<?php

trait Materials
{
    protected $materials;

    public function setMaterials($_materials)
    {
        $this->materials = $_materials;
    }

    #getters
    public function getMaterials()
    {
        return $this->materials;
    }
}
