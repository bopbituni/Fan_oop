<?php


class Remote
{

    public function boolen($fan)
    {
        if ($fan->turnOff()) {
            return "Trạng thái của quạt: " . $fan->turnOn();
        } else {
            return "Trạng thái của quạt " . $fan->turnOff();
        }
    }
    public function swapSpeed($fan, $button)
    {
        if ($fan->turnOn()) {
            return "Tốc độ của quạt hiện tại là: " . $button;
        }
    }
}