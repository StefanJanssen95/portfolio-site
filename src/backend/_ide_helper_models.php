<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string $phone_number
 * @property string $remarks
 * @property string $company_type
 * @property string $type
 * @property string $street
 * @property string $house_number
 * @property string $zip_code
 * @property string $city
 * @property int $country_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contact[] $contacts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contract[] $contracts
 * @property-read \App\Models\Country $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Site[] $sites
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereCompanyType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereCountryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereHouseNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company wherePhoneNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereRemarks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereStreet($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Company whereZipCode($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $first_name
 * @property string $prefix_last_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $email
 * @property string $remarks
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $companies
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact wherePhoneNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact wherePrefixLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereRemarks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contract
 *
 * @property int $id
 * @property int $employee_id
 * @property int $company_id
 * @property int $project_id
 * @property string $type
 * @property string $start_date
 * @property string $end_date
 * @property string $contract_path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Company $companies
 * @property-read \App\Models\Employee $employees
 * @property-read \App\Models\Project $projects
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereContractPath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereEmployeeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereEndDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereProjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereStartDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contract whereUpdatedAt($value)
 */
	class Contract extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Nationality
 *
 * @property int $id
 * @property string $name
 * @property-read \App\Models\Company $companies
 * @property-read \App\Models\Employee $employees
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Country whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Country whereName($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cv
 *
 * @property int $id
 * @property int $employee_id
 * @property string $introduction
 * @property string $interests
 * @property string $resume_path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Employee $companies
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projectsWithSentCv
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cv whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cv whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cv whereEmployeeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cv whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cv whereInterests($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cv whereIntroduction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cv whereResumePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cv whereUpdatedAt($value)
 */
	class Cv extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $email
 * @property string $phone_number
 * @property string $first_name
 * @property string $prefix_last_name
 * @property string $last_name
 * @property string $birth_date
 * @property string $gender
 * @property string $street
 * @property string $house_number
 * @property string $zip_code
 * @property string $city
 * @property int $country_id
 * @property string $img_path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contract[] $contracts
 * @property-read \App\Models\Country $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cv[] $cvs
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Language[] $languages
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Nationality[] $nationalities
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Site[] $sites
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Type[] $types
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereBirthDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereCountryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereGender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereHouseNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereImgPath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee wherePhoneNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee wherePrefixLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereStreet($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee whereZipCode($value)
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GoogleToken
 *
 * @property int $user_id
 * @property string $access_token
 * @property string $token_type
 * @property int $expires_in
 * @property string $refresh_token
 * @property int $created
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GoogleToken whereAccessToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GoogleToken whereCreated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GoogleToken whereExpiresIn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GoogleToken whereRefreshToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GoogleToken whereTokenType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GoogleToken whereUserId($value)
 */
	class GoogleToken extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee[] $employees
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Language whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Language whereName($value)
 */
	class Language extends \Eloquent {}
}

namespace App\Models\Logging{
/**
 * App\Models\Logging\Log
 *
 * @property int $id
 * @property \App\Models\User $user
 * @property string $updated_table
 * @property string $updated_row
 * @property string $action
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Logging\LogNNData[] $attachments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Logging\LogData[] $changes
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\Log whereAction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\Log whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\Log whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\Log whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\Log whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\Log whereUpdatedRow($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\Log whereUpdatedTable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\Log whereUser($value)
 */
	class Log extends \Eloquent {}
}

namespace App\Models\Logging{
/**
 * App\Models\Logging\LogData
 *
 * @property int $id
 * @property int $log_id
 * @property string $updated_column
 * @property string $old_data
 * @property string $new_data
 * @property-read \App\Models\Logging\Log $log
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogData whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogData whereLogId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogData whereNewData($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogData whereOldData($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogData whereUpdatedColumn($value)
 */
	class LogData extends \Eloquent {}
}

namespace App\Models\Logging{
/**
 * App\Models\Logging\LogNNData
 *
 * @property int $id
 * @property int $log_id
 * @property bool $parent
 * @property string $column
 * @property string $data
 * @property-read \App\Models\Logging\Log $log
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogNNData whereColumn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogNNData whereData($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogNNData whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogNNData whereLogId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Logging\LogNNData whereParent($value)
 */
	class LogNNData extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Nationality
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee[] $employees
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Nationality whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Nationality whereName($value)
 */
	class Nationality extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Project
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $description
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Company $companies
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contract[] $contracts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee[] $employees
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cv[] $sentOutCvs
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereUpdatedAt($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Question
 *
 * @property int $id
 * @property string $title
 * @property string $answer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question whereAnswer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question whereUpdatedAt($value)
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Site
 *
 * @property int $id
 * @property string $url
 * @property string $name
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $companies
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee[] $employees
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Site whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Site whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Site whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Site whereUrl($value)
 */
	class Site extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Skill
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee[] $employees
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Skill whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Skill whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Skill whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Skill whereUpdatedAt($value)
 */
	class Skill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Type
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee[] $employees
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Type whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Type whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Type whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Type whereUpdatedAt($value)
 */
	class Type extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $google_id
 * @property int $role_id
 * @property string $email
 * @property int $permissions
 * @property int $disallowed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\GoogleToken $google_token
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \App\Models\UserRole $role
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereDisallowed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereGoogleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePermissions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRoleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserRole
 *
 * @property int $id
 * @property string $name
 * @property int $permissions
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserRole whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserRole whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserRole whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserRole wherePermissions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserRole whereUpdatedAt($value)
 */
	class UserRole extends \Eloquent {}
}

