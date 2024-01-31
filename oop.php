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

    //sample of inheritance.
    abstract class Animal { //abstract class - purpose is to be inherited.
        //Properties
        private $species;
        private $lifespan;
        private $limbs;
    }
    class Dog extends Animal{
        private $breed;
        private $age;
    }
    
$shitzhu = new Dog();
$shitzhu -> limbs = 4;

echo $shitzhu->limbs; //resulted to 4 becuase it inherits animal.
?>