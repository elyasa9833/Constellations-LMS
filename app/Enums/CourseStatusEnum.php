<?php

namespace App\Enums;

enum CourseStatusEnum: string
{
    case Draft = 'draft';
    case UnderReview = 'under_review';
    case NeedsRevision = 'needs_revision';
    case Live = 'live';
    case Inactive = 'inactive';

    public static function values(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}