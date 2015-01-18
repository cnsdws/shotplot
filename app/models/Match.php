<?php

class Match extends Eloquent 
{

	public function user() {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('User');
    }

	public function firestring() {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('Firestring');
    }

    

}
