  <link rel="icon" href="Logof.gif" type="image/gif" sizes="16x16">

<h2>Login</h2>

<form action="login.php" method="post">
      <link rel="icon" href="Logof.gif" type="image/gif" sizes="16x16">

<p><label class="label" for="email">Email Address:</label>
<input id="email" type="text" name="email" size="30" maxlength="60"
value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" 
required> </p>
<!--<br>-->
<p><label class="label" for="psword">Password:</label>
<input id="psword" type="password" name="psword" size="12" minlength="8" maxlength="12"
value="<?php if (isset($_POST['psword'])) echo $_POST['psword']; ?>" 
required>
<span>&nbsp;Entre 8 y 12 caracteres.</span></p>
<!--<p>&nbsp;</p>--><p><input id="submit" type="submit" name="submit" value="Login"></p>
</form><br>