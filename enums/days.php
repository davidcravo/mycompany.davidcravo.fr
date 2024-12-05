<?php

enum Day: string{
    case Monday = 'monday';
    case Tuesday = 'tuesday';
    case Wednesday = 'wednesday';
    case Thursday = 'thursday';
    case Friday = 'friday';
    case Saturday = 'saturday';
    case Sunday = 'sunday';

    public function label(): string{
        return match($this){
            self::Monday => 'lundi',
            self::Tuesday => 'mardi',
            self::Wednesday => 'mercredi',
            self::Thursday => 'jeudi',
            self::Friday => 'vendredi',
            self::Saturday => 'samedi',
            self::Sunday => 'dimanche'
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