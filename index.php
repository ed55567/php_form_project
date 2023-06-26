<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Emmanuel Daniels Survey</title>
</head>

<body>
    <form action="survey.php" method="post">
        <h1>Emmanuel Daniels Survey</h1>

        <fieldset>
            <legend>About You</legend>

            <label>
                <p>What is your name?</p>
                <input type="text" name="name" placeholder="Your name" required>
            </label>

            <label>
                <p>What is your age?</p>
                <input type="text" name="age" placeholder="Your age" required>
            </label>

            <label>
                <p>What is your favorite color?</p>
                <input type="text" name="favorite color" placeholder="Your favorite color" required>
            </label>

            <label>
                <p>What is your favorite food?</p>
                <input type="text" name="favorite_food" placeholder="Your favorite food" required>
            </label>

            <label>
                <p>What is your favorite animal?</p>
                <input type="text" name="favorite_animal" placeholder="Your favorite animal" required>
            </label>
        </fieldset>

        <fieldset>
            <legend>Pizza and Preferences</legend>

            <label>
                <p>On a scale of 1 to 10, how much do you like pizza?</p>
                <input type="number" name="pizza_rating" placeholder="Your pizza rating" min="1" max="10" required>
            </label>

            <label>
                <p>Do you prefer dogs or cats?</p>
                <input type="radio" name="dog_cat" value="dog" required>Dog
                <input type="radio" name="dog_cat" value="cat">Cat
            </label>
        </fieldset>

        <fieldset>
            <legend>Favorites</legend>

            <label>
                <p>Pick your favorite movie from Emmanuel's favorites drop-down list.</p>
                <select name="favorite_movie" required>
                    <option value="" disabled selected>Select your option</option>
                    <option value="Superbad">Superbad</option>
                    <option value="There Will be Blood">There Will be Blood</option>
                    <option value="The Godfather">The Godfather</option>
                    <option value="Interstellar">Intersteller</option>
                    <option value="Heat">Heat</option>
                    <option value="Ghostbusters">Ghostbusters</option>
                </select>
            </label>

            <label>
                <p>Pick your favorite book from Emmanuel's favorites drop-down list.</p>
                <select name="favorite_book" required>
                    <option value="" disabled selected>Select your option</option>
                    <option value="Green Eggs and Ham">Green Eggs and Ham</option>
                    <option value="To Kill a Mockingbird">To Kill a Mockingbird</option>
                    <option value="A Tale of Two Cities">A Tale of Two Cities</option>
                    <option value="Animal Farm">Animal Farm</option>
                    <option value="Michael Crichton Prey">Michael Crichton Prey</option>
                    <option value="Lord of the Rings">Lord of the Rings</option>
                </select>
            </label>

            <label>
                <p>Pick your favorite TV show from Emmanuel's favorites drop-down list.</p>
                <select name="favorite_tv_show" required>
                    <option value="" disabled selected>Select your option</option>
                    <option value="The Office">The Office</option>
                    <option value="Cobra Kai">Cobra Kai</option>
                    <option value="Barry">Barry</option>
                    <option value="Breaking Bad">Breaking Bad</option>
                    <option value="Succession">Succession</option>
                    <option value="Dragon Ball Z">Dragon Ball Z</option>
                </select>
            </label>
        </fieldset>

        <input type="submit" value="Submit" class="submit-button">
    </form>

</body>

</html>
