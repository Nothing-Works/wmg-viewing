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
 * App\Property
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\RoomType[] $roomTypes
 * @property-read int|null $room_types_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Property whereUpdatedAt($value)
 */
	class Property extends \Eloquent {}
}

namespace App{
/**
 * App\Room
 *
 * @property int $id
 * @property string $room_number
 * @property int $room_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereRoomNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereRoomTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereUpdatedAt($value)
 */
	class Room extends \Eloquent {}
}

namespace App{
/**
 * App\RoomType
 *
 * @property int $id
 * @property string $name
 * @property int|null $property_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Property|null $property
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoomType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoomType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoomType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoomType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoomType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoomType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoomType wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoomType whereUpdatedAt($value)
 */
	class RoomType extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

