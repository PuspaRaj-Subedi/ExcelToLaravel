<?php

namespace App\Model\Family;

use App\Model\Address\Gaun;
use App\Model\Address\TBS;
use App\Model\Address\WardAddress;
use App\Model\Family\Agriculture\Machine\AgricultureMachine;
use App\Model\Family\Agriculture\Machine\AgricultureMachineType;
use App\Model\Family\Agriculture\Manure\AgricultureManure;
use App\Model\Family\AnimalHusbandry\AnimalHusbandry;
use App\Model\Family\AnimalHusbandry\AnimalHusbandryType;
use App\Model\Family\Business\Business;
use App\Model\Family\Business\BusinessType;
use App\Model\Family\DrinkingWater\DrinkingWater;
use App\Model\Family\DrinkingWater\DrinkingWaterSource;
use App\Model\Family\Energy\Energy;
use App\Model\Family\Energy\EneryType;
use App\Model\Family\EnvironmentalStatus\EnvironmentalStatus;
use App\Model\Family\EnvironmentalStatus\EnvironmentalStatusType;
use App\Model\Family\Expenditure\Expenditure;
use App\Model\Family\Expenditure\ExpenditureSource;
use App\Model\Family\HomeStructure\HomeStructure;
use App\Model\Family\HomeStructure\HomeStructureTerrace;
use App\Model\Family\HomeStructure\HomeStructureWall;
use App\Model\Family\Income\Income;
use App\Model\Family\Income\IncomeSource;
use App\Model\Family\Land\Land;
use App\Model\Family\Migration\Migration;
use App\Model\Family\NaturalDisaster\NaturalDisaster;
use App\Model\Family\NaturalDisaster\NaturalDisasterType;
use App\Model\Family\Production\Production;
use App\Model\Family\Production\ProductionType;
use App\Model\Family\SocialSecurity\SocialSecurity;
use App\Model\Family\SocialSecurity\SocialSecurityType;
use App\Model\Family\Transportation\Transportation;
use App\Model\Family\Transportation\TransportationType;
use App\Model\Person\Person;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $primaryKey = 'F_ID';

    protected $table = 'family';

    protected $fillable = ['TBS', 'Gaun', 'WA', 'lat', 'lng', 'urban', 'is_Joint', 'migration', 'parent_ID'];


    public  function agriculture_machine(){
        return $this->belongsToMany(AgricultureMachineType::class, AgricultureMachine::class, 'F_ID', 'type' )->withPivot('bought','rate');
    }

    public  function agriculture_manure(){
        return $this->belongsToMany(AgricultureMachineType::class, AgricultureManure::class, 'F_ID', 'type' )->withPivot('quantity', 'effects', 'typeA');
    }

    public  function animal_husbandry(){
        return $this->belongsToMany(AnimalHusbandryType::class, AnimalHusbandry::class, 'F_ID', 'type' )->withPivot('income', 'invest', 'profit', 'number');
    }

    public  function business(){
        return $this->belongsToMany(BusinessType::class, Business::class, 'F_ID', 'type' )->withPivot('income', 'invest', 'address');
    }

    public  function drinking_water(){
        return $this->belongsToMany(DrinkingWaterSource::class, DrinkingWater::class, 'F_ID', 'source' )->withPivot('distance', 'time', 'is_Available');
    }

    public  function energy(){
        return $this->belongsToMany(EneryType::class, Energy::class, 'F_ID', 'type' );
    }

    public  function environmental_status(){
        return $this->belongsToMany(EnvironmentalStatusType::class, EnvironmentalStatus::class, 'F_ID', 'type' )->withPivot('dateFrom', 'dateTo', 'reason', 'affectedPopulation');
    }

    public  function expenditure(){
        return $this->belongsToMany(ExpenditureSource::class, Expenditure::class, 'F_ID', 'source' )->withPivot('monthly', 'yearly');
    }

    public  function home_structure_terrace(){
        return $this->belongsToMany(HomeStructureTerrace::class, HomeStructure::class, 'F_ID', 'terrace' )->withPivot('floor', 'houseNo', 'totalHouse', 'roadAccess', 'buildDate');
    }

    public  function home_structure_wall(){
        return $this->belongsToMany(HomeStructureWall::class, HomeStructure::class, 'F_ID', 'wall' )->withPivot('floor', 'houseNo', 'totalHouse', 'roadAccess', 'buildDate');
    }

    public  function income(){
        return $this->belongsToMany(IncomeSource::class, Income::class, 'F_ID', 'source' )->withPivot('income', 'saving');
    }

    public  function land(){
        return $this->hasMany(Land::class,  'F_ID', 'F_ID' );
    }

    public  function migration(){
        return $this->hasone(Migration::class, 'Mg_ID',  'F_ID' );
    }

    public  function natural_disaster(){
        return $this->belongsToMany(NaturalDisasterType::class, NaturalDisaster::class, 'F_ID', 'type' )->withPivot('dateFrom', 'dateTo', 'lossQuantity', 'lossType');
    }

    public  function production(){
        return $this->belongsToMany(ProductionType::class, Production::class, 'F_ID', 'type' )->withPivot('productionArea', 'quantity', 'use', 'sell');
    }

    public  function social_security(){
        return $this->belongsToMany(SocialSecurityType::class, SocialSecurity::class, 'F_ID', 'type' )->withPivot('date', 'lossQuantity', 'lossType');
    }

    public  function transportation(){
        return $this->belongsToMany(TransportationType::class, Transportation::class, 'F_ID', 'Tr_Type' )->withPivot('type', 'number', 'investment', 'loan', 'profit', 'income');
    }

    public function person(){
        return $this->hasMany(Person::class, 'F_ID', 'F_ID');
    }

    public function address(){
        return $this->hasOne(WardAddress::class, 'WA_ID', 'WA');
    }

    public function tole(){
        return $this->hasOne(TBS::class, 'TBS_ID', 'TBS');
    }

    public function gaun(){
        return $this->hasOne(Gaun::class, 'Ga_ID', 'Gaun');
    }

}



//Schema::create('family', function (Blueprint $table) {
//    $table->bigInteger('F_ID')->nullable(false)->autoIncrement();
//    $table->integer('TBS')->nullable(false);
//    $table->integer('Gaun')->nullable(false);
//    $table->integer('WA')->nullable(false);
//    $table->boolean('urban')->comment('0: Urban\n1: Rural');
//    $table->boolean('is_joint')->nullable(false)->default(true)->comment('0: Nucler Family\n1: Joint Family\n');
//    $table->bigInteger('migration')->nullable(false)->default(false);
//    $table->bigInteger('parent_ID')->nullable(false);
//
//    $table->timestamps();
//
//
//    $table->foreign('WA')->references('WA_ID')->on('ward_address');
//    $table->foreign('Gaun')->references('Ga_ID')->on('gaun');
//    $table->foreign('TBS')->references('TBS_ID')->on('tbs');
//    $table->foreign('migration')->references('Mg_ID')->on('migration');
//    $table->foreign('parent_ID')->references('F_ID')->on('family');
//});
