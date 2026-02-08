<?php

namespace App\Enums;

enum IdeaState: string
{
    case PENDING = 'pending';
    case STARTED = 'started';
    case FINISHED = 'finished';
}
