<?php

abstract class Mammal {
    protected $age_;
    //below are functions I think all mammals will have,including people
    abstract public function setAge($age);
    abstract public function getAge();
    abstract public function eat($food);
}
class Person extends Mammal {
    protected $job_; //Person's feature
    public function setAge($age){
        $this->age_ = $age;
    }

    public function getAge(){
        return $this->age_;
    }

    public function eat($food){
        echo 'I eat ' ,$food ,'today';
    }

    //People only attribute
    public function setJob($job){
        $this->job_ = $job;
    }
    public function getJob(){
        echo 'My job is ' , $this->job_;
    }

}

//Now a person wants to fly, but they are typically not able to do so.
//So we implement an interface
interface Plane{
    public function Fly();
}

//I also want shoot the enemy
interface Gun{
    public function shoot();
}

class Person2 extends Mammal implements Plane,Gun{

    protected $job_;//Person feature
    public function setAge($age){
        $this->age_ = $age;
    }
    public function getAge(){
        return $this->age_;
    }
    public function eat($food){
        echo '<br/>I eat ' ,$food ,' today<br/>';
    }
    //Only a person has this feature.
    public function setJob($job){
        $this->job_ = $job;
    }
    public function getJob(){
        echo 'My job is ' , $this->job_;
    }


    //below implementations from interfaces function. (features that humans do not have).
    //Person implements from other class
    public function fly(){
        echo '<br/>I use plane,so I can fly<br/>';
    }
    public function shoot(){
        echo 'I use gun,so I can shoot<br/>';
    }
}

$People = new Person();
echo '<pre>';
print_r( get_class_methods('People'));
echo '</pre>';

echo '<pre>';
print_r( get_class_methods('People2'));
echo '</pre>';

$People2 = new Person2();
$People2->setAge(24);
echo $People2->getAge();
$People2->eat('egg');
$People2->setJob('PHP devepop');
echo $People2->getJob();

$People2->fly();
$People2->shoot();