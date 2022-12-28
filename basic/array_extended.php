<?php

// $str = "A 'quote' is <b>bold</b>";
// $str = '<script>alert(\'hello ... hi !\');</script>';

// // echo $str;
// // // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
// echo htmlentities($str);

// // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
// echo htmlentities($str, ENT_QUOTES);

// Requirement-1: Collect data from $person array and show the values in string. Also, show fruits in comma separated string.

// Requirement-2: Show the fruits in unordered list. Also, make the first letter capital.
// Requirement-3: Show the favorite sports in ordered list. Make it array from string.

// dataset:
$person = [
    'name' => 'John Doe',
    'age' => 20,
    'gender' => 'male',
    'nationality' => 'Bangladeshi',
    'favorite_fruits' => [
        'apple',
        'jackfruit',
        'mango'
    ],
    'favorite_sports' => "football, cricket, bandminton, table tennis"
];

// Output:
// John Doe is 20 years old. He is a Bangladeshi citizen. His favorite fruits are: apple, jackfruit, mango

// $fruits = [];
// $fruits = implode(', ', $person['favorite_fruits']);
$fruits = $person['favorite_fruits'];
$sports = explode(',', $person['favorite_sports']);

$output = '';
$output .= $person['name'] . ' is ' . $person['age'] . ' years old. ';

if ($person['gender'] === 'male') {
    $output .= 'He ';
} else {
    $output .= 'She ';
}

$output .= 'is a ' . $person['nationality'] . ' citizen. ';

echo $output;

echo "<br/>";

?>

<h4>Favorite Fruits are:</h4>
<ul>
    <?php foreach ($fruits as $fruit): ?>
    <li><?php echo ucfirst($fruit); ?></li>
    <?php endforeach;?>
</ul>



<h4>Favorite sports list:</h4>
<ul>
    <?php foreach ($sports as $sport): ?>
    <li><?php echo ucfirst($sport); ?></li>
    <?php endforeach;?>
</ul>
