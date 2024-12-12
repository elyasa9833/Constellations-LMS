<?php

namespace App\Enums;

enum CourseStatusEnum: string
{
    case Draft = 'draft';
    case UnderReview = 'under_review';
    case NeedsRevision = 'needs_revision';
    case Live = 'live';
    case Inactive = 'inactive';

}