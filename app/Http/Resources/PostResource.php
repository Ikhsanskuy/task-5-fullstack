<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        // $hasil = 1+1;
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'blog_content'=>$this->blog_content,
            'created_at'=>date_format($this->created_at, "d-m-Y H:i:s")
        ];
    }
}
