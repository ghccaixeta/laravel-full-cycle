<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ProjectNoteValidator.
 *
 * @package namespace App\Validators;
 */
class ProjectNoteValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [],
        ValidatorInterface::RULE_UPDATE => [],
        'project_id' => 'required',
        'title' => 'required',
        'note' => 'required',
        
    ];
}
