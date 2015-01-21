<?php

class Match extends Eloquent 
{

	public function user() {
        # Match belongs to User
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('User');
    }

	public function firestring() {
        # Match has many Firestring
        # Define a one-to-many relationship.
        return $this->hasMany('Firestring');
    }

    

}
