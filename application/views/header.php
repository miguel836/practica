<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INTELIGENCIA DE NEGOCIOS</title>

            <!-- Compiled and minified Bootstrap CSS -->
            <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          <!-- Importacion de Jquery Validation -->
            <!-- cdn de boostrap -->
            <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- jqery validate -->
        <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/jquery.validate.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/additional-methods.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/messages_es_AR.min.js'); ?>"></script>

        <!-- importacion de datatables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">

        </script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- CSS only -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <!-- sweetalet mensajes de confirmacion -->
        <!-- sweetalet mensajes de confirmacion -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.css" integrity="sha512-JzSVRb7c802/njMbV97pjo1wuJAE/6v9CvthGTDxiaZij/TFpPQmQPTcdXyUVucsvLtJBT6YwRb5LhVxX3pQHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.js" integrity="sha512-9V+5wAdU/RmYn1TP+MbEp5Qy9sCDYmvD2/Ub8sZAoWE2o6QTLsKx/gigfub/DlOKAByfhfxG5VKSXtDlWTcBWQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Importacion Bootstrap Select -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/i18n/defaults-es_ES.min.js" integrity="sha512-RN/dgJo36dNkKVnb1XGzePP4/8XGa/r+On4XYUy8I1C5z+9SsIEU2rFh6TrunAnddKwtXwMdI0Se8HZxd0GtiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <!-- importando libreria chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  </head>
  <body>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>
              <b>DASHBOARD CON
              TECNOLOGÍAS WEB</b>
            </h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI1KMvn1UZMeLQWgh23a_GEkGG_mLGdwanSg3VvvJ-nI3esjpiBIjYrQQqAqNxCgCA--c&usqp=CAU" class='imgRedonda'>
        </div>
    </div>
