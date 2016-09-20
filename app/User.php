<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getInitialsAttribute()
    {
        $parts = explode(' ', $this->name);
        $initials = '';
        $index = 0;
        $length = count($parts);

        foreach ($parts as $part)
        {
            if ($index == 0 || $index == $length-1)
            {
                $initials .= mb_substr($part, 0, 1);
            }
            $index++;
        }
        return $initials;
    }

    public function getColorAttribute()
    {
        $colors = array('orange', 'red', 'brown', 'blue', 'green', 'purple');
        $count = count($colors);
        $index = crc32($this->name) % $count;
        $color = $colors[$index];

        return $color;
    }
}
