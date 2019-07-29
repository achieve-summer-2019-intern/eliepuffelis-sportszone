<?php

namespace Drupal\test_service;

class Intern {

    private $positionTitle;
    private $internExperience;
    private $projectsInProgress;
    private $isClockedIn;
    private $hourlyWage;

    function __construct($hourlyWage) {
        
        $this->positionTitle = "Intern";
        $this->internExperience = 0;
        $this->getProjectsInProgress = 0;
        $this->isClockedIn = false;
        $this->hourlyWage = $hourlyWage;
    }

    public function getPositionTitle(){
        return $this->positionTitle;
    }

    public function setHourlyWage($hourlyWage){
        $this->hourlyWage = $hourlyWage;
    }

    public function getHourlyWage(){
        return $this->hourlyWage;
    }

    public function setWorkingStatus($isClockedIn) {
        $this->isClocked = $isClockedIn;
    }

    public function getWorkingStatus() {
        return $this->getWorkingStatus;
    }

    public function getProjectsInProgress(){
        return $this->projectsInProgress;
    }

    public function newProjectInitiated() {
        $projectsInProgress++;
        $internExperience += 5;
        if($internExperience >= 15) 
            positionPromotion();
    }
    
    public function projectCompleted() {
        $projectsInProgress--;
        $internExperience += 10;
        if($internExperience >= 15)
            positionPromotion();  
    } 

    public function getInternExperience() {
        
        if($internExperience <= 5) 
           echo("Beginner experience level, keep up the good work!");

        else if($internExperience <= 10) 
           echo("Moderate experience level, keep up the good work!");
        
        else if($internExperience < 15)
           echo("Hello");

        else 
            positionPromotion();

        return $this->internExperience;
    }
    
    public function getGrossPay($hoursWorked){
        return $this->hourlyWage * $hoursWorked;
    }

    public function positionPromotion() {
        echo("Congratulations you are an Entry Engineer!");
        $this->title = "Entry Engineer";
    }




}

// $obj = \Drupal::service('test_service.intern');
// echo($obj->getGrossPay(20));

