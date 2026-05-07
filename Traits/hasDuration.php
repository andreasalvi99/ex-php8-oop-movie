<?php

trait hasDuration {

    public int $durationMinutes;

    public function getDurationHours() {

    $decimal = $this->durationMinutes/60;
    $hours = floor($decimal);
    $minutes = round(($decimal - $hours) * 60);

        return "il film dura " .  $hours . " ore " . $minutes . " minuti";  
    }

}
