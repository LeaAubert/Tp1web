<?php

class Movie {
    public $name;
    public $description;
    public $duration;
    public $releasedate;
    
    public function getName()
        {
            echo "$this->name\n";
        }
    
    public function setName($name)
        {
            $this->name=$name;
        }
        
        
    function getDescription()
        {
            echo "$this->description\n";
        }
        
         function setDescription($description ="")
        {
            $this->description=$description;
        }
     
    function getDuration()
        {
            echo "$this->duration\n";
        }
        
        function setDuration($duration)
        {
            $this->duration=$duration;
        }
        
     function getReleasedate()
        {
            echo "$this->releasedate\n";
        }
        
     function setReleasedate($releasedate="")
        {
            $this->releasedate=$releasedate;
        }
 }
 
 
 $movie = new Movie;
 $movie->name = 'The Great Gatsby';
 $movie->description = 'Period drama movie starring Leonardo DiCaprio';
 $movie->duration = '142 min';
 $movie->releasedate = '2013';
 

 $movie->getName(); 
 $movie->getDescription();
 $movie->getDuration();
 $movie->getReleasedate();