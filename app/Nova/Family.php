<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;


class Family extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = \App\Family::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var  string
     */
    public static $title = 'family_name';

    /**
     * The columns that should be searched.
     *
     * @var  array
     */
    public static $search = [
        'family_name'
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Families');
    }

    /**
    * Get the displayable singular label of the resource.
    *
    * @return  string
    */
    public static function singularLabel()
    {
        return __('Family');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function fields(Request $request)
    {
        return [
                                                ID::make( __('Id'),  'id')
->rules('required')
->sortable()
,
                                                                BelongsTo::make('User')
->rules('required')
->sortable()
,
                                                                Text::make( __('Family Name'),  'family_name')
->rules('required')
->sortable(),
                                                                Text::make( __('Slug'),  'slug')->sortable()
,
                                                                HasOne::make('FamilySubscription')
->sortable()
,
                                                                Text::make( __('Current Billing Plan'),  'current_billing_plan')
->sortable()
,
                                                                Text::make( __('Card Brand'),  'card_brand')
->sortable()
,
                                                                Text::make( __('Card Last Four'),  'card_last_four')
->sortable()
,
                                                                Text::make( __('Card Country'),  'card_country')
->sortable()
,
                                                                Text::make( __('Billing Address'),  'billing_address')
->sortable()
,
                                                                Text::make( __('Billing Address Line 2'),  'billing_address_line_2')
->sortable()
,
                                                                Text::make( __('Billing City'),  'billing_city')
->sortable()
,
                                                                Text::make( __('Billing State'),  'billing_state')
->sortable()
,
                                                                Text::make( __('Billing Zip'),  'billing_zip')
->sortable()
,
                                                                Text::make( __('Billing Country'),  'billing_country')
->sortable()
,
                                                                Text::make( __('Extra Billing Information'),  'extra_billing_information')
->sortable()
,
                                                                DateTime::make( __('Trial Ends At'),  'trial_ends_at')
->sortable()
,
                                                                                            ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
