<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Yaro\Jarboe\Helpers\Traits\ImageTrait;

class Product extends Model
{
    use ImageTrait;
    
    protected $table = 'products';
    
    protected $url = '';
    
    public function getUrl()
    {
        return $this->url;
    } // end getUrl
    
    public function setUrl($url)
    {
        $this->url = $url;
    } // end setUrl
    
    public function getUri()
    {
        return $this->id .'/'. urlify($this->title);
    } // end getUri
}
