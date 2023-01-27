<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Project;

/**
 * Class ProjectTransformer.
 *
 * @package namespace App\Transformers;
 */
class ProjectTransformer extends TransformerAbstract
{
    /**
     * Transform the Project entity.
     *
     * @param \App\Entities\Project $model
     *
     * @return array
     */

    protected array $defaultIncludes = ['notes'];

    public function transform(Project $model)
    {
        return [
            'id'         => (int) $model->id,
            /* place your other model properties here */
            'name' => $model->name,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }

    public function includeNotes(Project $project)
    {
        return $this->collection($project->notes, new ProjectNoteTransformer());
    }
}
