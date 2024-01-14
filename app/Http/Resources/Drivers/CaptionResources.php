<?php

namespace App\Http\Resources\Drivers;

use App\Http\Resources\CountryResources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class CaptionResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'inviteFriend' =>  $this->invite->code_invite ?? null,
            'captaincar' => new CarsCaptionResources($this->captaincar),
            'profile' => new CaptainProfileResources($this->profile),
            'country' => new CountryResources($this->country),
            'fcm_token' => $this->fcm_token,
            'status' => $this->status,
            'avatar' => getImageCaption($this->id),
            'create_dates' => [
                'created_at_human' => $this->created_at->diffForHumans(),
               'created_at' => $this->created_at->format('y-m-d h:i:s')
            ],
            'update_dates' => [
                'updated_at_human' => $this->updated_at->diffForHumans(),
               'updated_at' => $this->updated_at->format('y-m-d h:i:s')
            ]
        ];
    }
}
