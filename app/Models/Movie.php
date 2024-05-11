<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Movie extends Model
{
use HasFactory;
protected $table = 'movies';
protected $fillable = ['title','rating','awards','release_year','length','genre_id'];
}