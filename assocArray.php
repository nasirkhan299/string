<?php
$myArray = [
    [
        "name" => "John Doe",
        "email" => "john@example.com",
        "age" => 25,
        "city" => "New York",
        "profession" => "Developer"
    ],
    [
        "name" => "Jane Smith",
        "email" => "jane@example.com",
        "age" => 30,
        "city" => "Los Angeles",
        "profession" => "Designer"
    ],
    [
        "name" => "Michael Johnson",
        "email" => "michael@example.com",
        "age" => 35,
        "city" => "Chicago",
        "profession" => "Engineer"
    ],
    [
        "name" => "Emily Davis",
        "email" => "emily@example.com",
        "age" => 28,
        "city" => "San Francisco",
        "profession" => "Product Manager"
    ],
    [
        "name" => "Any Jason",
        "email" => "anyjason@example.com",
        "age" => 29,
        "city" => "London",
        "profession" => "PHP Developer"
    ]
];


$index = 1;
if (isset($myArray[$index]['email']))  {
    echo "City: " . $myArray[$index]['email'];
} else {
    echo "City not found at index " . $index;
}
?>
