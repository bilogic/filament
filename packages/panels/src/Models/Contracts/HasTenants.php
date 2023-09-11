<?php

namespace Filament\Models\Contracts;

use Filament\Panel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface HasTenants
{
    public function canAccessTenant(Model $tenant): bool;

    /**
     * https://filamentphp.com/docs/3.x/panels/tenancy#setting-up-tenancy
     *
     * @return array<Model> | Collection
     */
    public function getTenants(Panel $panel): array | Collection;
}
