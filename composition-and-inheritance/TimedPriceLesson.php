<?php

class TimedPriceLesson extends Lesson
{
    public function cost()
    {
        return $this->duration * 5;
    }

    public function chargeType()
    {
        return 'timed';
    }
}
