<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <style>
    .error{
      background:red;
    }
  </style>
  <title>БОЛЬ И СТРАДАНИЯ АЯКС</title>
  <meta name="description" content="PAIN">
  <meta name="author" content="fructcode.com">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>

</head>

<body>
    <form method="post" id="ajax_form" action="" >
        <p><input type="text" name="name" placeholder="Имя" /></p>
        <p><input type="text" name="sname" placeholder="Фамилия" /></p>
        <p><input type="text" name="oname" placeholder="Отчество" /></p>
        <p><input type="text" name="year" placeholder="Год рождения" /></p>
        <p><input type="email" name="emaill" placeholder="Почта" /></p>
        <p><input type="text" name="countr" placeholder="Страна" /></p>
        <p><input type="button" id="btn" value="Отправить" /></p>
    </form>

    <br>

    <div id="result_form"></div> 
</body>
</html>