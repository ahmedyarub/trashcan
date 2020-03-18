<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Suggestion
 *
 * @property int $id
 * @property int $user_id
 * @property string $suggestion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Suggestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Suggestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Suggestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Suggestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Suggestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Suggestion whereSuggestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Suggestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Suggestion whereUserId($value)
 */
	class Suggestion extends \Eloquent {}
}

namespace App{
/**
 * App\Trashcan
 *
 * @property int $id
 * @property int $fill_level
 * @property string $longitude
 * @property string $latitude
 * @property int $last_collection_delay
 * @property \Illuminate\Support\Carbon $last_collection_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereFillLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereLastCollectionDelay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereLastCollectionTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereUpdatedAt($value)
 */
	class Trashcan extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $emirates_id
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmiratesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

