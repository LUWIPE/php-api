<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    private function resolveImageUrl(?string $imgUrl, Request $request): ?string
    {
        if (! $imgUrl) {
            return $imgUrl;
        }

        if (str_starts_with($imgUrl, 'http://') || str_starts_with($imgUrl, 'https://')) {
            return $imgUrl;
        }

        return $request->getSchemeAndHttpHost() . '/' . ltrim($imgUrl, '/');
    }

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
            'desc' => $this->desc,
            'img_url' => $this->resolveImageUrl($this->img_url, $request),
            'price' => $this->price,
            'stock' => $this->stock,
            'release' => $this->release,
            'type' => $this->whenLoaded('type', function () {
                return [
                    'id' => $this->type->id,
                    'name' => $this->type->name,
                ];
            }),
            'grade' => $this->whenLoaded('grade', function () {
                return [
                    'id' => $this->grade->id,
                    'name' => $this->grade->name,
                ];
            }),
            'digital' => $this->whenLoaded('digital', function () {
                return [
                    'id' => $this->digital->id,
                    'name' => $this->digital->name,
                ];
            }),
        ];
    }
}
