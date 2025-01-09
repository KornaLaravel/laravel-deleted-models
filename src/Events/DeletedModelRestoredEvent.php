<?php

namespace Spatie\DeletedModels\Events;

use Illuminate\Database\Eloquent\Model;
use Spatie\DeletedModels\Models\DeletedModel;

class DeletedModelRestoredEvent
{
    public function __construct(public DeletedModel $deletedModel, public Model $restoredModel) {}
}
