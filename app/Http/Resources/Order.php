<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $resumes=array();
        foreach($this->resumes as $resume){
            array_push($resumes,$resume->name);
        }
        return [
            'id'=> $this->id,
            'customer'=> $this->user->name,
            'resumes' => $resumes,
            'status'=>$this->status
        ];
    }
}
