<?php

class Time_slot{

    private string $day_of_the_week;
    private string $am_start;
    private string $am_end;
    private string $pm_start;
    private string $pm_end;

    public function __construct(string $day_of_the_week, ?string $am_start, ?string $am_end, ?string $pm_start, ?string $pm_end){
        $this->day_of_the_week = $day_of_the_week;
        $this->am_start = $am_start ?? '';
        $this->am_end = $am_end ?? '';
        $this->pm_start = $pm_start ?? '';
        $this->pm_end = $pm_end ?? '';
    }

    public function get_day_of_the_week(){return $this->day_of_the_week;}

    public function time_slot_html(string $selected){
        if(empty($this->am_start) || empty($this->am_end)){
            $am = 'Fermé';
        }else{
            $am = $this->am_start . 'h/' . $this->am_end . 'h';
        }
        if(empty($this->pm_start) || empty($this->pm_end)){
            $pm = 'Fermé';
        }else{
            $pm = $this->pm_start . 'h/' . $this->pm_end . 'h';
        }
        if($am === 'Fermé' && $pm === 'Fermé'){
            $result = "Fermé";
        }else{
            $result = $am . ' - ' . $pm;
        }
        return <<<HTML
            <li class="$selected">$this->day_of_the_week : $result</li> 
        HTML;
    }

    public function in_time_slot(float $time){
        return (($time>$this->am_start && $this->am_end<$time) || ($time>$this->pm_start && $this->pm_end<$time));
    }
}