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
}
?>