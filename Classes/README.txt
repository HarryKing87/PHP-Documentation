Instantiating
In the previous exercise, we created a class (a blueprint) for any pet we may want to make. But we didn’t make any actual, individual pet objects. Since objects are specific instances of a class, the process of creating them is called instantiation.

In PHP, objects are instantiated using the new keyword followed by the class name and parentheses.

$very_good_dog = new Pet();
We now have our first object, $very_good_dog. We interact with an object’s properties using the object operator (->) followed by the name of the property (without the dollar sign, $).

We can use this syntax to assign values to object properties:

$very_good_dog->name = "Lassie";
We can also use it to access the existing value of object properties:

echo $very_good_dog->name; # Prints "Lassie"