<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
// use App\Resource;
use App\Model\News;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UserName', 'Type', 'password', 'Permission'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function resources()
    // {
    //     return $this->hasMany('App\Resource');
    // }
    
    public function news()
    {
        return $this->hasMany('App\Model\News', 'UserId', 'id');
    }

    // Relationship with resources
    public function tags() {
        return $this->belongsToMany('App\Model\Tag', 'relations', 'ResId', 'TagId')->withTimestamps();
    }

    // Relationship with User
    public function resappointment() {
        return $this->belongsToMany('App\Model\Resource', 'appointments', 'UserId', 'ResId')->withPivot('Date', 'Option')->withTimestamps();
    }

    public function resselections() {
        return $this->belongsToMany('App\Model\Resource', 'selections', 'UserId', 'ResId')->withPivot('Option', 'Price')->withTimestamps();
    }

    public function rescomments() {
        return $this->belongsToMany('App\Model\Resource', 'comments', 'UserId', 'ResId')->withPivot('Comment')->withTimestamps();
    }

    // Operation
    public function addComment($userId, $resId, $comment) {
        $user = $this->find($userId);
        $user->rescomments()->attach($resId, ['Comment' => $comment]);
    }

    public function select($userId, $resId, $option) {
        $user = $this->find($userId);
        $user->resselections()->attach($resId, ['Option' => $option]);
    }

    public function appoint($userId, $resId, $date) {
        $user = $this->find($userId);
        $user->resappointment()->attach($resId, ['Date' => $date]);
    }

    public function showComments($userId) {
        return;
    }
}