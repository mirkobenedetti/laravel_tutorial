<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $title;
	protected $author;
	protected $body;
	protected $url;
}
