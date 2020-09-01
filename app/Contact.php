<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Events\UserHasContacted; 

class Contact extends Model
{
    public $timestamps = false;

    protected $table      = 'contact';
    protected $primaryKey = 'contactId';

    protected $fillable = ['contactId', 'countryId', 'userId', 'contactCode', 'contactName',
        'contactAddress', 'contactPhone', 'contactEmail', 'dateCreated', 'lastUserId'];

//--------------------------------------------------------------------
    /** Relations */
//--------------------------------------------------------------------
    public function user()
    {
        return $this->hasOne('App\User', 'userId', 'userId');
    }

//--------------------------------------------------------------------
    /** Query Scope  */
//--------------------------------------------------------------------
    //nombre codigo direccion
    public function scopeFilter($query, $filteredOut)
    {
        if ($filteredOut) {
            return $query->where('firstName', 'LIKE', "%$filteredOut%")
                         ->orWhere('lastName', 'LIKE', "%$filteredOut%")
                         ->orWhere('email', 'LIKE', "%$filteredOut%")
                         ->orWhere('contactNumber', 'LIKE', "%$filteredOut%");
        }
    }

//--------------------------------------------------------------------
    /** Function of Models */
//--------------------------------------------------------------------
    public function getAll($filteredOut)
    {
        return $this->orderBy('contactId', 'ASC')
                    ->filter($filteredOut)
                    ->paginate(10);
    }
//------------------------------------------
    public function findById($contactId)
    {
        return $this->where('contactId', '=', $contactId)
                    ->get();
    }
//------------------------------------------
    public function insertContact($data)
    {
    
        $contact                  = new Contact;
        $contact->firstName       =  strtoupper($data['firstName']);
        $contact->lastName        =  strtoupper($data['lastName']);
        $contact->email           = strtolower($data['email']);
        $contact->contactNumber   = $data['contactNumber'];
        $contact->save();

        UserHasContacted::dispatch($data);

        return $contact;
    }
//------------------------------------------
    public function updateContact($contactId,$data)
    {
       $contactUpdated =   $this->where('contactId', $contactId)->update(array(
            'firstName'    => $data['firstName'],
            'lastName'      => $data['lastName'],
            'email'         => $data['email'],
            'contactNumber'  => $data['contactNumber'],
        ));

        return $contactUpdated;

    }
//------------------------------------------
    public function deleteContact($contactId)
    {

          $this->where('contactId', '=', $contactId)->delete();

    }
//------------------------------------------

    
}
