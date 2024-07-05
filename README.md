# README

## Overview

This project is a simple web-based CV (Curriculum Vitae) generator. It consists of an HTML form that collects personal details, hobbies, and education information. Upon submission, the form data is processed by a PHP script, which formats and displays the inputted information in a readable format. The project also includes a basic CSS file for styling the form and the resulting CV.

## Project Structure

- `index.html`: The main HTML file containing the form for user input.
- `profiel.php`: The PHP script that processes the form data and generates the CV.
- `style.css`: The CSS file for styling the form and the CV output.

## Files Description

### index.html

This is the main HTML file that contains the form for users to input their personal details, hobbies, and education information. The form includes basic client-side validation using JavaScript to ensure all fields are filled before submission.

### profiel.php

This PHP script handles the form submission. It performs the following tasks:

1. **Debug Mode**: Optionally prints debug information if `$debug` is set to `1`.
2. **Data Processing**: Retrieves and sanitizes form data using `htmlspecialchars` to prevent XSS attacks.
3. **Date Formatting**: Converts the birthdate from the format `YYYY-MM-DD` to `DD/MM/YYYY`.
4. **Output**: Displays the submitted information in a formatted CV layout.

### style.css

This CSS file defines the styles for the form and the CV output, ensuring a clean and user-friendly interface. Key styles include:

- Centering the form and CV on the page.
- Adding padding, borders, and background colors for better visual structure.
- Styling form inputs and buttons for improved usability.

## How to Use

1. **Open `index.html` in a Web Browser**: This displays the form where you can input your personal details.
2. **Fill Out the Form**: Enter your first name, last name, birthdate, hobbies, high school name, and further education.
3. **Submit the Form**: Click the "Verzenden" button to submit the form.
4. **View the Generated CV**: The form data is sent to `profiel.php`, which processes the data and displays your CV.

## JavaScript Validation

The form includes a JavaScript function `validateForm()` to ensure that all fields are filled out before submission. If any field is empty, an error message is displayed, and the form is not submitted.

## Debug Mode

To enable debug mode, set the `$debug` variable in `profiel.php` to `1`. This will print the raw POST data and a message indicating that `profiel.php` is loaded.

```php
$debug = 1;
```

When debug mode is enabled, detailed information about the submitted data is displayed, which can be helpful for troubleshooting.

## Example

```html
<form class="form" action="profiel.php" method="post" onsubmit="return validateForm()">
    <label for="voornaam">Voornaam:</label><br>
    <input type="text" name="voornaam" id="voornaam"><br>
    <!-- Other form fields -->
    <input class="button" type="submit" value="Verzenden">
</form> 
```

## CSS Highlights

- **Form Styling**: The form is styled with a white background, padding, border, and rounded corners.
- **Button Styling**: The submit button has a black background, white text, and changes color when hovered or clicked.
- **Error Message**: The error message is displayed in red and centered below the form if validation fails.

## Conclusion

This project provides a basic yet functional web-based CV generator. It showcases the use of HTML forms, PHP for server-side processing, and CSS for styling. The project can be extended by adding more form fields, improving validation, and enhancing the styling to create a more polished application.
