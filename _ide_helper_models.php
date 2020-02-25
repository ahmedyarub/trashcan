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
 * App\Trashcan
 *
 * @property int $id
 * @property int $fill_level
 * @property string $longitude
 * @property string $latitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereFillLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trashcan whereId($value)
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

