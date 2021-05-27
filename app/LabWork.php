<?php
namespace App;

class LabWork
{
    private $pip;
    private $workNumber;
    private $workName;
    private $mark;

    public function __construct($pip, $workNumber, $workName, $mark)
    {
        $this->pip        = $pip;
        $this->workNumber = $workNumber;
        $this->workName   = $workName;
        $this->mark       = $mark;

    }

    public function getMark(): int
    {
        return $this->mark;
    }
    public function getPip(): string
    {
        return $this->pip;
    }
    public function getWorkName(): string
    {
        return $this->workName;
    }
    public function getWorkNumber(): string
    {
        return $this->workNumber;
    }
}
