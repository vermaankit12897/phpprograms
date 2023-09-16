<!-- calculates the area of a circle, rectangle, or triangle based on user input:

php
Copy code -->
<?php
$choice;
$r;
$l;
$w;
$b;
$h;
$area;

echo "Input 1 for the area of a circle\n";
echo "Input 2 for the area of a rectangle\n";
echo "Input 3 for the area of a triangle\n";
echo "Input your choice : ";
$choice = readline();

switch ($choice) {
    case 1:
        echo "Input radius of the circle : ";
        $r = readline();
        $area = 3.14 * $r * $r;
        break;
    case 2:
        echo "Input length and width of the rectangle : ";
        $l = readline();
        $w = readline();
        $area = $l * $w;
        break;
    case 3:
        echo "Input the base and height of the triangle : ";
        $b = readline();
        $h = readline();
        $area = 0.5 * $b * $h;
        break;
    default:
        echo "Invalid choice\n";
        exit;
}

echo "The area is: $area\n";
?>