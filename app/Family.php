<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{

	/**
	 * @var  string
	 */
	protected $table = 'family';

	protected $casts = [
																																																																																									'trial_ends_at' => 'datetime',
												'created_at' => 'datetime',
												'updated_at' => 'datetime',
						];
 
								public function user()
		{
			return $this->hasOne('App\User', 'primary_user_id', 'id');
		}
													public function family_subscription()
		{
			return $this->hasOne('App\FamilySubscription', 'payments_id', 'id');
		}
																																													}
