<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\DateTime;


class FamilySubscription extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = \App\FamilySubscription::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var  string
     */
    public static $title = 'subscription_plan';

    /**
     * The columns that should be searched.
     *
     * @var  array
     */
    public static $search = [
        'subscription_plan', 'name'
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Family Subscriptions');
    }

    /**
    * Get the displayable singular label of the resource.
    *
    * @return  string
    */
    public static function singularLabel()
    {
        return __('Family Subscription');
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
                                                                HasOne::make('Family')
->rules('required')
->sortable()
,
                                                                Text::make( __('Name'),  'name')
->rules('required')
->sortable()
,
                                                                Text::make( __('Payments Id'),  'payments_id')
->rules('required')
->sortable()
,
                                                                Text::make( __('Subscription Plan'),  'subscription_plan')
->rules('required')
->sortable()
,
                                                                Number::make( __('Quantity'),  'quantity')
->rules('required')
->sortable()
,
                                                                DateTime::make( __('Trial Ends At'),  'trial_ends_at')
->sortable()
,
                                                                DateTime::make( __('Ends At'),  'ends_at')
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
