<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\ProjectNote;

/**
 * Class ProjectNoteTransformer.
 *
 * @package namespace App\Transformers;
 */
class ProjectNoteTransformer extends TransformerAbstract
{
    /**
     * Transform the ProjectNote entity.
     *
     * @param \App\Entities\ProjectNote $model
     *
     * @return array
     */
    public function transform(ProjectNote $model)
    {
        return [
            'id'         => (int) $model->id,
            'title' => $model->title,
            /* place your other model properties here */
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
