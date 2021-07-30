<?php

namespace App\Model\Person;

use App\Model\Family\Agriculture\Machine\AgricultureMachine;
use App\Model\Family\Agriculture\Machine\AgricultureMachineType;
use App\Model\Person\Addiction\Addiction;
use App\Model\Person\Addiction\AddictionType;
use App\Model\Person\Disabled\Disabled;
use App\Model\Person\Disabled\DisabledType;
use App\Model\Person\Education\Education;
use App\Model\Person\Education\EducationLevel;
use App\Model\Person\Education\EducationSchoolCampus;
use App\Model\Person\Education\EducationSubject;
use App\Model\Person\Employment\Employment;
use App\Model\Person\Employment\EmploymentName;
use App\Model\Person\Health\Health;
use App\Model\Person\Health\HealthType;
use App\Model\Person\Hobby\Hobby;
use App\Model\Person\Hobby\HobbyName;
use App\Model\Person\Insurance\Insurance;
use App\Model\Person\Insurance\InsuranceName;
use App\Model\Person\Language\Language;
use App\Model\Person\Language\LanguageName;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $primaryKey = 'P_ID';

   protected $table = 'person';

   protected $fillable = ['FName','MName','LName','gender','DOB','Nationality','voterID','citizenship','religion','bank_account','contact','email','bloodGroup','caste','relation', 'Skill', 'image', 'is_Dead', 'F_ID'];

    public function addiction(){
        return $this->belongsToMany(AddictionType::class, Addiction::class, 'P_ID', 'type' )->withPivot('expenditure', 'reason', 'sd', 'ed');
    }

    public function disabled(){
        return $this->belongsToMany( DisabledType::class, Disabled::class, 'P_ID', 'type' )->withPivot('reason');
    }

    public function education_level(){
        return $this->belongsToMany( EducationLevel::class, Education::class, 'P_ID', 'level' )->withPivot('subject','schoolCampus','level','continued');
    }

    public function education_schoolCampus(){
        return $this->belongsToMany( EducationSchoolCampus::class, Education::class, 'P_ID', 'schoolCampus' )->withPivot('subject','schoolCampus','level','continued');
    }

    public function education_subject(){
        return $this->belongsToMany( EducationSubject::class, Education::class, 'P_ID', 'subject' )->withPivot('subject','schoolCampus','level','continued');
    }

    public function employment(){
        return $this->belongsToMany( EmploymentName::class, Employment::class, 'P_ID', 'name' )->withPivot('type' ,'income' ,'sd' ,'ed');
    }

    public function health(){
        return $this->belongsToMany( HealthType::class, Health::class, 'P_ID', 'type' )->withPivot('startedDate');
    }

    public function hobby(){
        return $this->belongsToMany( HobbyName::class, Hobby::class, 'P_ID', 'type' );
    }

    public function insurance(){
        return $this->belongsToMany( InsuranceName::class, Insurance::class, 'P_ID', 'type' )->withPivot('startedDate');
    }

    public function language(){
        return $this->belongsToMany( LanguageName::class, Language::class, 'P_ID', 'name' );
    }

    public function caste(){
        return $this->hasOne( Caste::class, 'C_ID', 'caste' );
    }

    public function nationality(){
        return $this->hasOne( Nationality::class, 'N_ID', 'Nationality' );
    }

    public function relation(){
        return $this->hasOne( Relation::class, 'RWH_ID', 'relation' );
    }

    public function skill(){
        return $this->hasOne( Skill::class, 'S_ID', 'Skill' );
    }


//    public function getCountByGender(){
//        return $this->addCountTotal()->first();
//    }
//
//    public function addCountTotal(){
//        $this->selectRaw("COUNT('{$this->table}.{$this->primaryKey}') as total");
//        return $this;
//    }
//
//    public function setCountAttribute()
//    {
//        return $this->selectRaw("COUNT(CASE WHEN `person`.`gender` = '0' THEN 1 END) as male, COUNT(CASE WHEN `person`.`gender` = '1' THEN 1 END) as female,COUNT(CASE WHEN `person`.`gender` = '2' THEN 1 END) as others");
////        $this->attributes['first_name'] = strtolower($value);
//    }
//
//    public function addCountByGender(){
//        $this->selectRaw("COUNT(CASE WHEN `person`.`gender` = '0' THEN 1 END) as male, COUNT(CASE WHEN `person`.`gender` = '1' THEN 1 END) as female,COUNT(CASE WHEN `person`.`gender` = '2' THEN 1 END) as others");
//        return $this;
//    }
}


  // Schema::create('person', function (Blueprint $table) {
  //           $table->bigInteger('P_ID')->nullable(false)->autoIncrement();
  //           $table->string('FName')->nullable(false);
  //           $table->string('MName');
  //           $table->string('LName')->nullable(false);
  //           $table->enum('gender',['0','1','2'])->nullable(false)->default(0)->comment('0: Male\n1: Female\n2: Others');
  //           $table->date('DOB')->nullable(false);
  //           $table->integer('Nationality')->nullable(false);
  //           $table->boolean('voterID')->nullable(false)->default(false);
  //           $table->boolean('citizenship')->nullable(false)->default(false);
  //           $table->enum('religion',['0','1','2','3','4'])->nullable(false)->default(0)->comment('0: Hinduism\n1: Buddhism\n2: Muslim\n3: Islam\n4: Christianity\n');
  //           $table->string('contact',10)->unique();
  //           $table->string('email')->unique();
  //           $table->enum('bloodGroup',['0',"A+", "B+", "AB+", "O+", "A-", "B-", "AB-", "O-"]);
  //           $table->integer('caste')->nullable(false);
  //           $table->integer('relation')->nullable(false)->comment("Relation with Head");
  //           $table->boolean('is_Dead')->default(false);
  //           $table->timestamps();
  //       });
