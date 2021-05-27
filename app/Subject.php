<?php
namespace App;

use App\LabWork;

class Subject
{
    private $_labs = array();
    private $subjectName;
    public function __constructor(string $subjectName)
    {
        $this->subjectName = $subjectName;
        $this->_labs[]     = new LabWork("alex", 1, $this->subjectName, 10);
        $this->_labs[]     = new LabWork("vera", 1, $this->subjectName, 8);
        $this->_labs[]     = new LabWork("vadim", 1, $this->subjectName, 15);
        $this->_labs[]     = new LabWork("bodya", 1, $this->subjectName, 5);
        $this->_labs[]     = new LabWork("alex", 2, $this->subjectName, 7);
        $this->_labs[]     = new LabWork("alex", 3, $this->subjectName, 10);
        $this->_labs[]     = new LabWork("vadim", 2, $this->subjectName, 6);
        $this->_labs[]     = new LabWork("vera", 2, $this->subjectName, 11);
        $this->_labs[]     = new LabWork("vadim", 3, $this->subjectName, 4);
        $this->_labs[]     = new LabWork("bodya", 2, $this->subjectName, 12);
    }

    public function getMarkSummAtOnes(string $pip): int
    {
        $summ = 0;
        foreach ($this->_labs as $lab) {
            if ($lab->getPip() == $pip) {
                $summ += $lab->getMark();
            }
        }
        return $summ;
    }
    public function getCountByWorkNumber(int $wn): int
    {
        $summ = 0;
        foreach ($this->_labs as $lab) {
            if ($lab->getWorkNumber() == $wn) {
                $summ += 1;
            }
        }
        return $summ;
    }
}
