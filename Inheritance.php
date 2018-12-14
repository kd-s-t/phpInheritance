<?php
class Head{

    public function eyes(){
        return "I have eyes";
    }

    public function ears(){
        return "I have ears";
    }
}

# Inherited or Sub class (Note Person in bracket)
class Body extends Head {

    public function chest(){
        return "I have chest";
    }

    public function stomach(){
        return "I have stomach";
    }
}


$parts = new Body(); # An Object of Employee
echo $parts->chest()."\n";
echo $parts->stomach()."\n";
echo $parts->eyes()."\n";
echo $parts->ears()."\n";
