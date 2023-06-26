<link rel="stylesheet" type="text/css" href="style.css" />


<?php
// Define the form fields and their error messages
$fields = array(
    "name" => "Please enter your name.",
    "age" => "Please enter your age.",
    "favorite_color" => "Please enter your favorite color.",
    "favorite_food" => "Please enter your favorite food.",
    "favorite_animal" => "Please enter your favorite animal.",
    "pizza_rating" => "Please rate how much you like pizza.",
    "dog_cat" => "Please select your preference for dogs or cats.",
    "favorite_movie" => "Please select your favorite movie.",
    "favorite_book" => "Please select your favorite book.",
    "favorite_tv_show" => "Please select your favorite TV show."
);

// Function to validate form fields
function validateFormFields($fields) {
    $values = array();

    foreach ($fields as $field => $errorMsg) {
        if (empty($_POST[$field])) {
            echo '<p class="submit">' . $errorMsg . '</p>';
        } else {
            $values[$field] = $_POST[$field];
        }
    }

    return $values;
}

// Function to process the form data
function processFormData($values) {
    // Process the data further or store it in a database
    // ...

    // Display the submitted information
    foreach ($values as $field => $value) {
        echo '<p class="submit">Your ' . $field . ' is ' . $value . '.</p>';
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate form fields
    $values = validateFormFields($fields);

// Process the information if all fields are valid
if (count($values) === count($fields)) {
  echo '<div class="submit-message">Thank you for completing the survey!</div>';

  // Display the submitted information
  echo '<div class="submit-info">';
  foreach ($values as $field => $value) {
      echo '<p>Your ' . $field . ' is: <strong><span class="no-underline">' . $value . '</span></strong></p>';
  }
  echo '</div>';
}

}



?>


