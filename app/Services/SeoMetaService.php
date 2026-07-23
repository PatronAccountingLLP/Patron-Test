<?php

namespace App\Services;

use App\Models\SeoMeta;
use Illuminate\Database\Eloquent\Model;

class SeoMetaService
{
    /**
     * Create or update SEO meta for a model
     */
    public function updateOrCreate(Model $model, array $seoData): SeoMeta
    {
        // Filter out empty values
        $filteredData = array_filter($seoData, function ($value) {
            return !is_null($value) && $value !== '';
        });

        return SeoMeta::updateOrCreate(
            [
                'page_id' => $model->id,
                'page_type' => get_class($model),
            ],
            $filteredData
        );
    }

    /**
     * Get SEO meta for a model
     */
    public function getForModel(Model $model): ?SeoMeta
    {
        return SeoMeta::where('page_id', $model->id)
            ->where('page_type', get_class($model))
            ->first();
    }

    /**
     * Delete SEO meta for a model
     */
    public function deleteForModel(Model $model): bool
    {
        return SeoMeta::where('page_id', $model->id)
            ->where('page_type', get_class($model))
            ->delete();
    }

    /**
     * Generate default meta title if empty
     */
    public function generateDefaultMetaTitle(Model $model): string
    {
        if (method_exists($model, 'getTitle')) {
            return $model->getTitle();
        }

        return $model->title ?? $model->name ?? config('app.name');
    }

    /**
     * Generate default canonical URL
     */
    public function generateCanonicalUrl(Model $model): string
    {
        if (method_exists($model, 'getUrl')) {
            return url($model->getUrl());
        }

        return url()->current();
    }
}
