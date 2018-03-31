<?php

class FixedPriceLesson extends Lesson
{
    public function cost()
    {
        return 30;
    }

    public function chargeType()
    {
        return 'fixed';
    }
}
