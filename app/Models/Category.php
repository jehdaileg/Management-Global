<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\CategoryController;


class Category extends Model
{
	use HasFactory;

	protected $guarded = [];

	protected $appends = ['text'];

	public function getTextAttribute()
	{

		return $this->name;
		
	}



}
