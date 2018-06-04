<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use Notifiable;

    protected $table = 'registers';

    protected $fillable = [
        'first_name','last_name','email', 'password','register_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->admin; // this looks for an admin column in your users table
    }
}
