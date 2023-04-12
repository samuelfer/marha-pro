<?php

namespace App\Filament\Widgets;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Usuários', User::all()->count())
                ->description('usuários do sistema')
                ->descriptionIcon('heroicon-o-users'),
            Card::make('Permissões', Permission::all()->count())
                ->description('permissões do sistema')
                ->descriptionIcon('heroicon-o-key'),
            Card::make('Perfis', Role::all()->count())
                ->description('perfis do sistema')
                ->descriptionIcon('heroicon-o-user-circle')
        ];
    }
}
