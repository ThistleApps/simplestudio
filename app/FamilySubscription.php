<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilySubscription extends Model
{

	/**
	 * @var  string
	 */
	protected $table = 'family_subscriptions';

	protected $casts = [
																																							'trial_ends_at' => 'datetime',
												'ends_at' => 'datetime',
												'created_at' => 'datetime',
												'updated_at' => 'datetime',
						];
 
								public function family()
		{
			return $this->hasOne('App\Family', 'family_id', 'id');
		}
																											}
