<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

    <h1>{{trans('greetings.hello')}}</h1>

    <hr>
    <form class="" action="change" method="post">
      <label for="">Select language:</label>
      <input type="text" name="lang" value="">
      <input type="submit" name="" value="Save">
    </form>

    <?php
      echo $lang;?>
  </body>
</html>
