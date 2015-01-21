<?php

class Firestring extends Eloquent 
{

	public function match() 
	{
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('Match');
    }
    
}
