<?php
namespace Domains\Shared\Data\Criteria;

enum CriteriaSortDirection: string
{
    case ASC = 'ASC';
    case DESC = 'DESC';

    public function value(): string
    {
        return $this->value;
    }
}
