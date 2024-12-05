<?php

enum Day: string{
    case Monday = 'Monday';
    case Tuesday = 'Tuesday';
    case Wednesday = 'Wednesday';
    case Thursday = 'Thursday';
    case Friday = 'Friday';
    case Saturday = 'Saturday';
    case Sunday = 'Sunday';

    public function label(): string{
        return match($this){
            self::Monday => 'Lundi',
            self::Tuesday => 'Mardi',
            self::Wednesday => 'Mercredi',
            self::Thursday => 'Jeudi',
            self::Friday => 'Vendredi',
            self::Saturday => 'Samedi',
            self::Sunday => 'Dimanche'
        };
    }

    public static function getDayKeysValues(): array{
        return [
            self::Monday->value => self::Monday->label(),
            self::Tuesday->value => self::Tuesday->label(),
            self::Wednesday->value => self::Wednesday->label(),
            self::Thursday->value => self::Thursday->label(),
            self::Friday->value => self::Friday->label(),
            self::Saturday->value => self::Saturday->label(),
            self::Sunday->value => self::Sunday->label()
        ];
    }
}