<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title', 'content']; #same as constructor

	public function likes()
	{
		return $this->hasMany('App\Like','post_id');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id')->withTimestamps(); 
	}

	//Mutator for title
	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = strtolower($value);
	}

	//Accessor to force title to be in Upper case when retrieve it from db
	public function getTitleAttribute($value)
	{
		return strtoupper($value);
	}
}
?>