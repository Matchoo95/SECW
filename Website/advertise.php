<?php
  session_start();
  include './auth.php';
  include './query.php';
  include './login.php';
?>

<html lang="en">
  <head>
    <title>Edu Home</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header>
    <h1 class="logo">
      <a href="index.php">Edu Home</a> <!--feel free to change to a image later-->
    </h1>
        <nav class="navigation">
          <ul>
             <li class="active"><a href="index.php">Home</a></li>
             <li ><a href="search.php">Search</a></li>
             <li ><a href="advertise.php">Advertise</a></li>
             <li ><a href="about.php">About</a></li>
             <li ><a href="register.php">Register</a></li>
          </ul>
        </nav>
  </header>
    <main>
        <section class="leftSideBar">
          <article id="signin">
            <form id='login' method='post' accept-charset='UTF-8'>
              <h2>Sign in</h2>

              <label for='username'>Username:</label>
              <input type='text' name='username' id='username' maxlength="50" placeholder="Username" required autofocus/>

              <br />

              <label for='password'>Password:</label>
              <input type='password' name='password' id='password' maxlength="50" placeholder="Password" required/>

              <br />

              <button type='submit' name='Submit' value='Submit'>Sign in</button>

            </form>
          </article>
        </section>
        <section id="mainCont" class="mainContent">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed ante quis est imperdiet condimentum. Nunc sit amet eleifend est. Etiam semper feugiat lorem. Ut dictum ante ut sem tincidunt, ut blandit ante congue. Sed porta blandit augue. Aliquam efficitur massa eu turpis varius, nec efficitur turpis tincidunt. Praesent iaculis blandit eleifend. Donec aliquet elit sed interdum fringilla. Maecenas dapibus non eros eget placerat. Nulla sit amet justo dignissim, sagittis massa ut, sodales enim. Nunc nec mollis tellus. Fusce tellus ex, pretium at tempor ac, sodales nec mauris.
          </p>
        </section>
    </main>
    <footer>
      <p>
        FOOTER
      </p>
    </footer>
  </body>
  <script src="javascript/script.js"></script>
</html>
