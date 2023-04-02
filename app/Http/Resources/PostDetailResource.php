<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'blog_content' => $this->blog_content,
            'created_at'=>date_format($this->created_at, "d-m-Y H:i:s"),
            'author' => $this->author,
            'writer' => $this->whenLoaded('writer')
        ];
    }
}
