<?php

class Firestring extends Eloquent 
{

	public function match() 
	{
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('Match');
    }
    
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function scopeGetById($query, $id)
    {
        return $query->where('user_id', Auth::user()->id)->where('id', $id);
    }
}
