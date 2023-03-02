<?php

namespace App\Repositories;

use App\Models\User;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
/**
 * Class UserRepository
 * @version January 11, 2020, 11:09 am UTC
 */
class IdVerificationsRepository extends BaseRepository
{

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        // return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    
    public function model()
    {
        return User::class;
    }

    /**
     * @return mixed
     */
    public function getSyncList()
    {
        // public function getPatients()
        {
            $user = Auth::user();
            if ($user->hasRole('Doctor')) {
                $patients = getPatientsList($user->owner_id);
            } else {
                $patients = Patient::with('patientUser')
                    ->whereHas('patientUser', function (Builder $query) {
                        $query->where('status', 1);
                    })->get()->pluck('patientUser.full_name', 'id')->sort();
            }
            return $patients;
        }
    }
}
