<?php

namespace App\Utils;

use App\Models\Role;

class AuthValidationInputs
{
   private $first_name;
   private $last_name;
   private $phone;
   private $email;
   private $roleId;
   private $profile;
   private $roleModel;

   public function __construct(Role $roleModel)
   {
       $this->roleModel = $roleModel;
   }
   public function getFirstName() {
    return $this->first_name;
}

public function setFirstName($first_name) {

    if (preg_match('/^[a-zA-Z]+$/', $first_name) && strlen($first_name) > 2) {
        $this->first_name = $first_name;
        return true;
    } else {

        return false;
    }
}

public function getLastName() {
    return $this->last_name;
}

public function setLastName($last_name) {
    if (preg_match('/^[a-zA-Z]+$/', $last_name) && strlen($last_name) > 2) {
        $this->last_name = $last_name;
        return true;
    } else {

        return false;
    }
}

public function getPhone() {
    return $this->phone;
}

public function setPhone($phone) {
    if (preg_match('/^\+?[0-9\s()-]{7,}$/', $phone)) {
        $this->phone = $phone;
        return true;
    } else {
        return false;
    }
}

public function getEmail() {
    return $this->email;
}

public function setEmail($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        $this->email = $email;
        return true;
    }else{
        return false;
    }
}

public function getRole() {
    return $this->roleId;
}

public function setRole($roleId)
{
    $role = $this->roleModel->find($roleId);
    if ($role) {
        $this->roleId = $roleId;
        return true;
    } else {
        return false;
    }
}

public function getProfile() {
    return $this->profile;
}

public function setProfile($profile) {
    $this->profile = $profile;
}
public function register($first_name, $last_name, $phone, $email){
    // initialize an array from validation errors
    $validationErrors = [];

    // set users properties and teste the validation
    $this->setFirstName($first_name);

    if (!$this->getFirstName()) {
        $validationErrors["first_name"] = "First name is not valid.";
    }

    $this->setLastName($last_name);
    if (!$this->getLastName()) {
        $validationErrors["last_name"] = "Last name is not valid.";
    }

    $this->setPhone($phone);
    if (!$this->getPhone()) {
        $validationErrors['phone'] = "Phone number is not valid.";
    }

    $this->setEmail($email);

    if (!$this->getEmail()) {
        $validationErrors["email"] = "Email is not valid.";
    }

    

    // if  validation errors not empty, return the array of validatoion errors
    if (!empty($validationErrors)) {
        return $validationErrors;
    }


    //if validation error is empty , return true
    return true;
}

}
