<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autenticação</title>
    <link rel="stylesheet" href="./assets/css/styles.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/materialize.min.css" type="text/css">
    <link rel="stylesheet" href="./views/auth/style.css" type="text/css">
</head>
<body>
    <div class="container">
        <section>
          <div class="row">
            <h2 class="center">Autenticação</h2>
            <form class="col s12" method="POST" action="?c=u&a=vl">
              <div class="row">
                
              <div class="row">
                <div class="input-field col s12">
                  <input name="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">
                Logar
              </button>
            </form>
          </div>
        </section>
    </div>

    <script src="assets/js/materialize.min.js">
    </script>
    <script>
    </script>
  <?php if(isset($alert)) : ?>
    <script>      
        M.toast({html: "<?= $alert; ?>"});
    </script>
  <?php endif;?>
</body>
</html>