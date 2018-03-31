<?php

abstract class Lesson
{
    const FIXED = 1;
    const TIMED = 2;

    protected $duration;
    private $costStrategy;

    public function __construct(int $duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }
}
