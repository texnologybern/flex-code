<?php
/**
 * Created by PhpStorm.
 * User: GRE-ENG
 * Date: 11/29/2017
 * Time: 6:58 PM
 */

//$john = new Student("John","Smith");

$jane = new Student("Jane","Jones", 20, "Female");

//$jane->$name = "John";

#$john->name = "john";
#$john->surname = "Smith";
#$john->age = "22";
//var_dump($john);



echo "Hi I am : ".$jane->GetFullName().PHP_EOL."<br/>";
echo($jane);

echo "Hello my name is".$jane->GetName();

$jane->setDOB(19,10,1987);

//echo "My DOB is: ".$jane->GetDOB();
echo "<hr>";
$date = new Date(01,10,2017);

echo $date->GetDate();

include_once("class_date.php");

class Student {


    protected $name;
    protected $surname;
    protected $dob;
    protected $age;
    protected $gender;




    //magic method
    function __construct($name, $surname, $gender, $age){

        $this->name = $name;
        $this->surname = $surname;
        $this->gender= $gender;
        $this->age = $age;



    }

    public function GetName(){

        return $this->name;

    }
   function __construct1($name,$surname, $age,$gender){


  $this->name = $name;
     $this->surname = $surname;
      $this->age = $age;
       $this->gender = $gender;


}

    public function GetFullName(){


        return $this->name." ".$this->surname;
    }


    public function Report(){

        var_dump(get_defined_functions());


    }


    public function __toString(){

        return $this->GetFullName()." ".$this->age." ".$this->gender;
    }

 //   protected function update_internal($value){

      //  $this->internal = $value;

  //  }

   public function GetGender($gender){

       $this->gender;


   }

public function SetGender($gender){

      if (self::validate_input($gender) and (strtolower($gender) == 'male' or strtolower($gender)== 'female' )){

          $this->gender = strtolower($gender);
          return true;

      }

}


    public function SetName($name){

        if(self::validate_input($name) and is_string($name)){

            $this->name = $name;
            return true;
        }
         return false;
    }

    protected static function validate_input($input){

        if(!empty($name) and str_replace(" ","",$name) and is_string($name)) return true;
        else return false;


    }

public function setDOB($dd,$mm,$yyyy){

if (self::validate_input($dd) or self::validate_input($mm) or self::validate_input($yyyy )){

    if(is_int($dd) and ($dd > 0 or $dd < 32)){

      if(is_int($mm) and ($mm > 0 or $mm < 13)){


           if(is_int($yyyy) and (yyyy > 1900 or $yyyy < 2100 )){

               $this->dob = $dd.'/'.$mm.'/'.yyyy.'/';

           }

        }
}

}

    return false;
}

 public function GetDOB(){

return $this->dob;

 }
public function GetAge(){

    $date_array = explode("/",$this->GetDOB());
        $current_date = getdate();
    return $current_date['year']-$date_array[2];

}

}



?>