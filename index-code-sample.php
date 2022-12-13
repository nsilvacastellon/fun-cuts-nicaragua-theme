<?php 
function greet($name, $color) {
    echo "<p> Hi, my name is $name and my favorite color is $color.</p>";
}

greet('Jhon', 'blue');
greet('Jane', 'green');

$names = array('Brad', 'John', 'Jane', 'Meowsalot');

$count = 1;
while($count <= 100) {
echo "<li> $count </li>";
$count++;
};

$counter = 0;

while($counter < count($names)) {

echo "<li> Hi, my name is $names[$counter] </li>";
$counter++;
}


?>

<p>Hi, my name is <?php echo $names[0] ?></p>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facilis, odio harum mollitia nam tenetur recusandae et beatae explicabo aut pariatur, quas iure quasi. Voluptatibus enim sapiente veritatis odit magnam.
Facere, dolor voluptas? Quisquam cum impedit dolore voluptatem ut, omnis cupiditate quibusdam porro optio molestias corrupti deleniti tempora! Eaque ipsam fugit ab. Quia quasi at neque, commodi autem quidem sint?
Possimus, sequi corrupti consequatur modi non alias beatae fugit dignissimos quasi repellendus laudantium soluta repellat cupiditate nesciunt praesentium nostrum perspiciatis molestiae quam adipisci repudiandae officiis placeat? Debitis ut porro delectus.
Pariatur totam amet iusto illum sit. Aliquid quas voluptates quidem rerum dolores praesentium doloremque repudiandae optio id eveniet, laudantium iusto asperiores? Ratione sapiente sed laboriosam incidunt asperiores aperiam, repudiandae laborum!
Quidem placeat non, ipsam nisi illum eius eaque delectus reprehenderit, ea tempore molestiae eveniet? Suscipit modi nisi ipsum? Soluta id dolorem saepe excepturi maxime? Ratione laborum voluptatibus quia repudiandae porro.