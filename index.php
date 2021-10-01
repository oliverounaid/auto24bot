<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>auto24 bot</title>
  <link rel="stylesheet" href="/style.css" />
</head>

<body>

  <header>
    <a href="#"><img src="https://img.auto24.ee/images/main_logo.gif" alt="auto24 logo was here"></a>
  </header>

  <main>
   <h1>INSTRUCTIONS</h1>
    <ul>
      <li>
        <em>
            1. Select car model/models.
        </em>
      </li>
      <li>
        <em>
          2. Leave an email for notifications/updates.
        </em>
      </li>
    </ul>
    <h2>Available Models for BMW</h2>
		<ul>
      <li>
       <label for="1. Seeria"><input id="1. Seeria" type="checkbox" value="1. Seeria"> 1. Seeria</label>
      </li>
		  <li>
        <label for="2. seeria"><input id="2. seeria" type="checkbox" value="2. Seeria"> 2. Seeria</label>
      </li>
      <li>
      <label for="3. seeria"><input id="3. seeria" type="checkbox" value="3. Seeria"> 2. Seeria</label>
    </li>
    <li>
      <label for="321"><input id="321" type="checkbox" value="321"> 321</label>
    </li>
    <li>
      <label for="4. seeria"><input id="4. seeria" type="checkbox" value="4. Seeria"> 4. Seeria</label>
    </li>
    <li>
      <label for="5. seeria"><input id="5. seeria" type="checkbox" value="5. Seeria"> 5. Seeria</label>
    </li>
    <li>
      <label for="6. seeria"><input id="6. seeria" type="checkbox"  value="6. Seeria"> 6. Seeria</label>
    </li>
    <li>
      <label for="7. seeria"><input id="7. seeria" type="checkbox" value="7. Seeria"> 7. Seeria</label>
    </li>
    <li>
      <label for="8. seeria"><input id="8. seeria" type="checkbox" value="8. Seeria"> 8. Seeria</label>
    </li>
    <li>
      <label for="i3"><input id="i3" type="checkbox" value="i3"> i3</label>
    </li>
    <li>
      <label for="M2"><input id="M2" type="checkbox" value="M2"> M2</label>
    </li>
    <li>
      <label for="M3"><input id="M3" type="checkbox" value="M3"> M3</label>
    </li>
    <li>
      <label for="M4"><input id="M4" type="checkbox" value="M4"> M4</label>
    </li>
    <li>
      <label for="M5"><input id="M5" type="checkbox" value="M5"> M5</label>
    </li>
    <li>
      <label for="M6"><input id="M6" type="checkbox" value="M6">M6</label>
    </li>
    <li>
      <label for="X1"><input id="X1" type="checkbox" value="X1">X1</label>
    </li>
    <li>
      <label for="X2"><input id="X2" type="checkbox" value="X2">X2</label>
    </li>
    <li>
      <label for="X3"><input id="X3" type="checkbox" value="X3">X3</label>
    </li>
    <li>
      <label for="X3 M"><input id="X3 M" type="checkbox" value="X3 M">X3 M</label>
    </li>
    <li>
      <label for="X4"><input id="X4" type="checkbox" value="X4">X4</label>
    </li>
    <li>
      <label for="X4 M"><input id="X4 M" type="checkbox" value="X4 M">X4 M</label>
    </li>
    <li>
      <label for="X5"><input id="X5" type="checkbox" value="X5">X5</label>
    </li>
    <li>
      <label for="X5 M"><input id="X5 M" type="checkbox" value="X5 M">X5 M</label>
    </li>
    <li>
      <label for="X6"><input id="X6" type="checkbox" value="X6">X6</label>
    </li>
    <li>
      <label for="X6 M"><input id="X6 M" type="checkbox" value="X6 M">X6 M</label>
    </li>
    <li>
      <label for="X7"><input id="X7" type="checkbox" value="X7">X7</label>
    </li>
    <li>
      <label for="Z3"><input id="Z3" type="checkbox" value="Z3">Z3</label>
    </li>
    <li>
      <label for="Z4"><input id="Z4" type="checkbox" value="Z4">Z4</label>
    </li>
    <li>
      <label for="Z4 M"><input id="Z4 M" type="checkbox" value="Z4 M"> Z4 M</label>
    </li>
  </ul>

  <form action="index.php" method="post">
      <input type="email" placeholder="example@email.com" name="email"pattern=".+@gmail\.com" required>
        <button type="submit">Submit</button>
  </form>
  </main>

    <?php

    $email = $_POST["email"];
    echo "$email";
    $files = fopen("emails.txt", "a");
    fwrite($files, "$email \n");
    fclose($files)

    ?>

  <footer>
    <p>
      <small>Team-1 &copy; 2021</small>
    </p>
  
  </footer>
</body>

</html>