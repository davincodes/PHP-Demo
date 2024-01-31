<?php
    //Pillars of OOP
        //1. Encapsulation - ability to protect or restrict elements.
        //2. Abstraction - 
        //3. Enheritance - 
        //4. Polymorphism
    //Procedural Programming

    //Object Oriented Programing - it focuses on objects/creating objects. purpose of OOP is to make it reusable.
        // OOP - makes your code reusable.
        //OOP relies on Classess and Objects.
    //Setters$ getters. - setters to set data.
    //this keyword - indicates you are accessing the same scope
    //constructor


    //Access Modifiers
    // 1. Public
    // 2. Private - access it if there are setters and getters.

    //instantitiate
    class student { //create a class
        //Properties
        private $name;
        private $gender;


        function __construct($name, $gender){ //every you entantiate it willl be triggered.
            this->name = $name;
            this->gender = $gender;
            //ancd more ....
        }
    }   //classes are nothing if you dont initialize it on an object.
        //Methods
        function set_name($name){
            this->name = $name;
        }
        function get_name(){
            return $this->name;
        }

    $john = new Student("John Doe","Male",19); //every time there is a new it will trigger construct.

    // $john->name = "John Cena";
    
    echo $john -> get_name();

?>