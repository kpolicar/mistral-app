<?php namespace App\Nova;


use Laravel\Nova\Fields\Textarea;
use Illuminate\Http\Request;

class Permission extends \Vyuldashev\NovaPermission\Permission
{
    public function fields(Request $request): array
    {
        return array_merge(parent::fields($request), [
            Textarea::make('Description')->showOnIndex(),
        ]);
    }
}
