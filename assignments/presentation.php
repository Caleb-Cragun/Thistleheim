<!-- PHP code to show the examples. -->
<?php
  // Assigns values to a variable
  $value1 = 0;
  $value2 = FALSE;
  $value3 = TRUE;
  $value4 = "Bird";
  
  // Examples of the == comparison
  // Compares value1 to value2
  if ($value1 == $value2){
    $example1 = "value1 == value2 is true";    
  } else {
    $example1 = "value1 == value2 is false";  
  }
  // Compares value1 to value3
  if ($value1 == $value3){
    $example2 = "value1 == value3 is true";    
  } else {
    $example2 = "value1 == value3 is false";  
  }
  // Compares value1 to value4
  if ($value1 == $value4){
    $example3 = "value1 == value4 is true";    
  } else {
    $example3 = "value1 == value4 is false";  
  }
  // Compares value2 to value3
  if ($value2 == $value3){
    $example4 = "value2 == value3 is true";    
  } else {
    $example4 = "value2 == value3 is false";  
  }
  // Compares value2 to value4
  if ($value2 == $value4){
    $example5 = "value2 == value4 is true";    
  } else {
    $example5 = "value2 == value4 is false";  
  }
  // Compares value3 to value4
  if ($value3 == $value4){
    $example6 = "value3 == value4 is true";    
  } else {
    $example6 = "value3 == value4 is false";  
  }
  
  // Examples of the === comparison
  // Compares value1 to value2
  if ($value1 === $value2){
    $test1 = "value1 === value2 is true";    
  } else {
    $test1 = "value1 === value2 is false";  
  }
  // Compares value1 to value3
  if ($value1 === $value3){
    $test2 = "value1 === value3 is true";    
  } else {
    $test2 = "value1 === value3 is false";  
  }
  // Compares value1 to value4
  if ($value1 === $value4){
    $test3 = "value1 === value4 is true";    
  } else {
    $test3 = "value1 === value4 is false";  
  }
  // Compares value2 to value3
  if ($value2 === $value3){
    $test4 = "value2 === value3 is true";    
  } else {
    $test4 = "value2 === value3 is false";  
  }
  // Compares value2 to value4
  if ($value2 === $value4){
    $test5 = "value2 === value4 is true";    
  } else {
    $test5 = "value2 === value4 is false";  
  }
  // Compares value3 to value4
  if ($value3 === $value4){
    $test6 = "value3 === value4 is true";    
  } else {
    $test6 = "value3 === value4 is false";  
  }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Thistleheim | Presentation</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php' ?>
    </head>
    <body>
        <div>
            <header role="banner">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php' ?>
                </div>    
            </header>
            <nav role='navigation'>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php' ?>
                </div>
            </nav>
            <main role='main'>
                <div>
                    <h1>Teaching Presentation</h1>
                    <p>
                        Alright, I'm here to talk about today is the difference 
                        between =, ==, and ===. Now this may get a little 
                        confusing so here goes.
                    </p>
                    
                    <h2>=</h2>
                    <p>
                        This is the simpler of the three. This is used for 
                        assignment. In the simplest case, mostly used for
                        assigning values to a variable. For instance the code
                        sample below assigns values to variables. 0 is assigned
                        to the variable value1, false is assigned to the
                        variable value2, true is assigned to the variable 
                        value3, and the string "bird" is assigned to value4. As
                        you may notice, value2 has no value. I believe this is
                        because false is the same as 0, or nothing, which is why
                        nothing is shown.
                    </p>
                    <p>Value1: <?php echo (string)$value1?></p>
                    <p>Value2: <?php echo (string)$value2?></p>
                    <p>Value3: <?php echo (string)$value3?></p>
                    <p>Value4: <?php echo (string)$value4?></p>
                    
                    <h2>==</h2>
                    <p>
                        This is used for comparison. This operator compares two
                        values to one another, but in a strange way. This 
                        comparison changes the two values being compared to the
                        same data type. Once the conversion is done, the values
                        are then compared to one another. The examples below
                        compare each of the 4 values to one another. Each is
                        compared and a string displayed to show whether or not 
                        they are the same or not.
                    </p>
                    <p>Example1: <?php echo $example1?></p>
                    <p>Example2: <?php echo $example2?></p>
                    <p>Example3: <?php echo $example3?></p>
                    <p>Example4: <?php echo $example4?></p>
                    <p>Example5: <?php echo $example5?></p>
                    <p>Example6: <?php echo $example6?></p>
                    
                    <h2>===</h2>
                    <p>
                        This is also used for comparison. However, unlike ==, it
                        does not convert the data types to be the same. This one
                        checks if the values are both the same data type and the
                        same value. Each is compared and a string displayed to 
                        show whether or not they are the same or not.                       
                    </p>
                    <p>Example1: <?php echo $test1?></p>
                    <p>Example2: <?php echo $test2?></p>
                    <p>Example3: <?php echo $test3?></p>
                    <p>Example4: <?php echo $test4?></p>
                    <p>Example5: <?php echo $test5?></p>
                    <p>Example6: <?php echo $test6?></p>
                    
                    <h2>Here is a video of my presentation.</h2>
                    <video controls><source src="/Media/Presentation.mp4"></video>
                </div>
            </main>
            <footer role='contentinfo'>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php' ?>
                    <?php echo 'Last updated: ' . date('j M Y', getlastmod()) ?>
                </div>
            </footer>
        </div>
    </body>
</html>
