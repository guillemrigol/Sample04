<!DOCTYPE html>
<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Directori Sample04</title>
    <style>

    *{
      margin:0;
      padding:0;
    }

    body{
      background-color:#404040;
      width:100%;
    }

    ol{
      display:grid;
      position:relative;
      width:80%;
      height:auto;
      margin:0 auto;
      grid-template-columns:repeat(3, 1fr);
      grid-template-rows:repeat(6, 100px);
      grid-column-gap:10px;
      grid-row-gap:10px;
    }

    li{
      background-color:#fdfcfb;
      list-style:none;
      display:flex;
      align-items: center;
      justify-content: center;
    }

    li:nth-child(1){
      grid-column-start: 1;
      grid-column-end: 3;
      animation: flow 2s infinite;
      font-size:2rem;
    }

    @keyframes flow {
      0%{background-color:#FED003;}
      25%{background-color:#FEDFED;}
      50%{background-color:#DEFDEF;}
      75%{background-color:#FDEFDE;}
    }

    </style>
  </head>
  <body>
    <ol>
    <?php include('collabs/guillem.php') ?>
    <?php include('collabs/albert.php') ?>
    <?php include('collabs/Oussama.php') ?>
    <?php include('collabs/Marc.php') ?>
    <?php include('collabs/gelchhen.php') ?>
    <?php include('collabs/barbare.php') ?>
    <?php include('collabs/pol.php') ?>
    <?php include('collabs/pau.php') ?>
    <?php include('collabs/jonatan.php') ?>
    <?php include('collabs/Èric.php') ?>
    <?php include('collabs/cristian.php') ?>
    <?php include('collabs/majid.php') ?>
    <?php include('collabs/gTrujillo.php') ?>
    <?php include('collabs/robert.php') ?>
    <?php include('collabs/isaias.php') ?>
    <?php include('collabs/david.php') ?>
    <?php include('collabs/sergi.php') ?>
  </body>
</html>
