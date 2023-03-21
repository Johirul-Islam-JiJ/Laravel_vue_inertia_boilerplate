<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Activity
 *
 * @property int $id
 * @property int $log_id
 * @property array|null $before_change
 * @property array|null $after_change
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Log $log
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Query\Builder|Activity onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereAfterChange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereBeforeChange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Activity withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Activity withoutTrashed()
 */
	class Activity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contract
 *
 * @property int $id
 * @property string $contract_id
 * @property int $contract_type_id
 * @property int $merchant_id
 * @property int $employee_id
 * @property int $pdq_terminal_type_id
 * @property string|null $contract_initial
 * @property string $signing_date
 * @property string $commission
 * @property string $commission_from_supplier
 * @property string $start_date
 * @property string $end_date
 * @property string|null $mprn
 * @property string|null $mpan
 * @property string|null $pdq_merchant_id
 * @property string|null $pdq_terminal_rental
 * @property string|null $pdq_debit_rate
 * @property string|null $pdq_credit_rate
 * @property string|null $pdq_authorization_fees
 * @property string|null $meter_serial_number
 * @property string $main_contact_name
 * @property string $main_contact_mobile
 * @property string|null $main_contact_telephone
 * @property string|null $main_contact_email
 * @property string|null $main_contact_home_address
 * @property string|null $main_contact_dob
 * @property string|null $other_contact_name
 * @property string $status
 * @property string|null $status_remarks
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\ContractType $contract_type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ContractDocument[] $documents
 * @property-read int|null $documents_count
 * @property-read \App\Models\Employee $employee
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Merchant $merchant
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ContractNote[] $notes
 * @property-read int|null $notes_count
 * @property-read \App\Models\PdqTerminalType $pdq_terminal_type
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newQuery()
 * @method static \Illuminate\Database\Query\Builder|Contract onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCommissionFromSupplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereContractInitial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereContractTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMainContactDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMainContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMainContactHomeAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMainContactMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMainContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMainContactTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMeterSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMpan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereMprn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereOtherContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract wherePdqAuthorizationFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract wherePdqCreditRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract wherePdqDebitRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract wherePdqMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract wherePdqTerminalRental($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract wherePdqTerminalTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereSigningDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereStatusRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|Contract withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Contract withoutTrashed()
 */
	class Contract extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContractDocument
 *
 * @property int $id
 * @property int $contract_id
 * @property string $name
 * @property string|null $path
 * @property string|null $details
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Contract $contract
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument newQuery()
 * @method static \Illuminate\Database\Query\Builder|ContractDocument onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractDocument whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|ContractDocument withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ContractDocument withoutTrashed()
 */
	class ContractDocument extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContractNote
 *
 * @property int $id
 * @property int $contract_id
 * @property string $date
 * @property string $details
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Contract $contract
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote newQuery()
 * @method static \Illuminate\Database\Query\Builder|ContractNote onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractNote whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|ContractNote withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ContractNote withoutTrashed()
 */
	class ContractNote extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContractType
 *
 * @property int $id
 * @property string $type
 * @property string $supplier_name
 * @property string|null $supplier_details
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contract[] $contracts
 * @property-read int|null $contracts_count
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType newQuery()
 * @method static \Illuminate\Database\Query\Builder|ContractType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereSupplierDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereSupplierName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|ContractType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ContractType withoutTrashed()
 */
	class ContractType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $type
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string|null $date_of_birth
 * @property string $designation
 * @property string $employee_type
 * @property string $company_name
 * @property string $nationality
 * @property string $nid_number
 * @property string|null $telephone
 * @property string $mobile
 * @property string $email
 * @property string|null $passport_number
 * @property string|null $passport_expiry_date
 * @property string|null $visa_expiry_date
 * @property string $address_line_1
 * @property string|null $address_line_2
 * @property string $city
 * @property string $post_code
 * @property string|null $next_of_kin_name
 * @property string|null $next_of_kin_mobile
 * @property string|null $next_of_kin_email
 * @property string|null $next_of_kin_address
 * @property string|null $image
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contract[] $contracts
 * @property-read int|null $contracts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmployeeDocument[] $documents
 * @property-read int|null $documents_count
 * @property-read string $address
 * @property-read string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Lead[] $leads
 * @property-read int|null $leads_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmployeeNote[] $notes
 * @property-read int|null $notes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Query\Builder|Employee onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmployeeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNextOfKinAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNextOfKinEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNextOfKinMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNextOfKinName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereNidNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePassportExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePassportNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereVisaExpiryDate($value)
 * @method static \Illuminate\Database\Query\Builder|Employee withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Employee withoutTrashed()
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EmployeeDocument
 *
 * @property int $id
 * @property int $employee_id
 * @property string $name
 * @property string|null $path
 * @property string|null $details
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Employee $employee
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument newQuery()
 * @method static \Illuminate\Database\Query\Builder|EmployeeDocument onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeDocument whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|EmployeeDocument withTrashed()
 * @method static \Illuminate\Database\Query\Builder|EmployeeDocument withoutTrashed()
 */
	class EmployeeDocument extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EmployeeNote
 *
 * @property int $id
 * @property int $employee_id
 * @property string $date
 * @property string $details
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Employee $employee
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote newQuery()
 * @method static \Illuminate\Database\Query\Builder|EmployeeNote onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeNote whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|EmployeeNote withTrashed()
 * @method static \Illuminate\Database\Query\Builder|EmployeeNote withoutTrashed()
 */
	class EmployeeNote extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Lead
 *
 * @property int $id
 * @property int $employee_id
 * @property string $company_name
 * @property string|null $trading_name
 * @property string|null $trading_address_line_1
 * @property string|null $trading_address_line_2
 * @property string|null $trading_city
 * @property string|null $trading_post_code
 * @property string $visiting_date
 * @property string $contact_person_name
 * @property string|null $contact_person_telephone
 * @property string $contact_person_mobile
 * @property string|null $contact_person_email
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Employee $employee
 * @property-read string $contact_details
 * @property-read string $trading_address
 * @method static \Illuminate\Database\Eloquent\Builder|Lead newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lead newQuery()
 * @method static \Illuminate\Database\Query\Builder|Lead onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Lead query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereContactPersonEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereContactPersonMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereContactPersonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereContactPersonTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereTradingAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereTradingAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereTradingCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereTradingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereTradingPostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lead whereVisitingDate($value)
 * @method static \Illuminate\Database\Query\Builder|Lead withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Lead withoutTrashed()
 */
	class Lead extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Log
 *
 * @property int $id
 * @property int $loggable_id
 * @property string $loggable_type
 * @property int $user_id
 * @property string|null $action
 * @property string|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Activity|null $activity
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $loggable
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Log newQuery()
 * @method static \Illuminate\Database\Query\Builder|Log onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Log query()
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereLoggableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereLoggableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Log withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Log withoutTrashed()
 */
	class Log extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Merchant
 *
 * @property int $id
 * @property string|null $registration_number
 * @property string $company_name
 * @property string $company_address_line_1
 * @property string|null $company_address_line_2
 * @property string $company_city
 * @property string $company_post_code
 * @property string|null $trading_name
 * @property string|null $trading_address_line_1
 * @property string|null $trading_address_line_2
 * @property string|null $trading_city
 * @property string|null $trading_post_code
 * @property string|null $bank_name
 * @property string|null $bank_account_name
 * @property string|null $bank_account_number
 * @property string|null $bank_short_code
 * @property string|null $landlord_name
 * @property string|null $landlord_contact_details
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contract[] $contracts
 * @property-read int|null $contracts_count
 * @property-read string $company_address
 * @property-read string $trading_address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant newQuery()
 * @method static \Illuminate\Database\Query\Builder|Merchant onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereBankAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereBankAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereBankShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCompanyAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCompanyAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCompanyCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCompanyPostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereLandlordContactDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereLandlordName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereRegistrationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereTradingAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereTradingAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereTradingCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereTradingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereTradingPostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Merchant whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|Merchant withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Merchant withoutTrashed()
 */
	class Merchant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notice
 *
 * @property int $id
 * @property string $date
 * @property string $subject
 * @property string $details
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Notice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notice newQuery()
 * @method static \Illuminate\Database\Query\Builder|Notice onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Notice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|Notice withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Notice withoutTrashed()
 */
	class Notice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PdqTerminalType
 *
 * @property int $id
 * @property string $type
 * @property string $manufacturer
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contract[] $contracts
 * @property-read int|null $contracts_count
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType newQuery()
 * @method static \Illuminate\Database\Query\Builder|PdqTerminalType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PdqTerminalType whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|PdqTerminalType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PdqTerminalType withoutTrashed()
 */
	class PdqTerminalType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Query\Builder|Permission onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Permission withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Permission withoutTrashed()
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Query\Builder|Role onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Role withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Role withoutTrashed()
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Settings
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string|null $mobile
 * @property string|null $whatsapp
 * @property string $address
 * @property string|null $working_hour
 * @property string|null $short_description
 * @property string|null $description
 * @property string $copyright
 * @property string|null $logo
 * @property string|null $favicon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newQuery()
 * @method static \Illuminate\Database\Query\Builder|Settings onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings query()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCopyright($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereWhatsapp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereWorkingHour($value)
 * @method static \Illuminate\Database\Query\Builder|Settings withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Settings withoutTrashed()
 */
	class Settings extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transaction
 *
 * @property int $id
 * @property int $transaction_purpose_id
 * @property int|null $contract_id
 * @property string $type
 * @property string $date
 * @property string $amount
 * @property string|null $details
 * @property string $status
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Contract|null $contract
 * @property-read \App\Models\TransactionPurpose $transaction_purpose
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Query\Builder|Transaction onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTransactionPurposeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|Transaction withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Transaction withoutTrashed()
 */
	class Transaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TransactionPurpose
 *
 * @property int $id
 * @property string $type
 * @property string $purpose
 * @property string|null $details
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Transaction[] $transactions
 * @property-read int|null $transactions_count
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose newQuery()
 * @method static \Illuminate\Database\Query\Builder|TransactionPurpose onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose query()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionPurpose whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|TransactionPurpose withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TransactionPurpose withoutTrashed()
 */
	class TransactionPurpose extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $phone
 * @property string|null $address
 * @property string|null $avatar
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

