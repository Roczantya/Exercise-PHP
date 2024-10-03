<?php 
    function greet() {
        $students = ['Tiffany', 'Nina', 'Tania', 'Budi', 'Mike'];

        foreach ($students as $student) { 
            echo "Hello ". $student . "!\n";
        }
    }
    
    greet();
?>