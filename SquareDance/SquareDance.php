<?php
include_once 'GenderInterface.php';

class SquareDance
{
    protected $queueMale;
    protected $queueFemale;
    public function __construct()
    {
        $this->queueMale = new SplQueue();
        $this->queueFemale = new SplQueue();
    }

    public function addDance(Dance $dance)
    {
        if ($dance->getGender() === GenderInterface::MALE) {
            $this->queueFemale->enqueue($dance);
        }else {
            $this->queueFemale->enqueue($dance);
        }
    }

    public function pairDance()
    {
        while (!$this->queueFemale->isEmpty() || !$this->queueMale->isEmpty()) {
            if ($this->queueMale->isEmpty()) {
                return count($this->queueFemale) . 'Nữ đang chờ' . '<br>';
            }
            if ($this->queueFemale->isEmpty()) {
                return count($this->queueFemale). 'Nam đang chờ' . '<br>';
            }
        }
        return 'cặp' . $this->queueMale->dequeue()->getName() . '-' . $this->queueFemale->dequeue()->getName(). '<br>';

    }

}