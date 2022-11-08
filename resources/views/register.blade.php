<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GeeksBox</title>
    <link rel="stylesheet" href="src/master.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>Register at our HUB.</h2>
      </div>
      <form class="form" id="form">
        @csrf
        <div class="form-control">
          <label for="">Pr&eacute;nom</label>
          <input type="text" placeholder="Aya Estelle" id="firstname" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div class="form-control">
          <label for="">Nom</label>
          <input type="text" placeholder="KOFFI" id="lastname" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div class="form-control">
          <label for="">Email</label>
          <input type="email" placeholder="estellekoffi@gmail.com" id="email" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        

        <div class="form-control">
          <label for="">Choisir votre niveau universitaire</label>
            <select name="" id="level">
                <option value="0">Niveau</option>
                <option value="1">Licence 2</option>
                <option value="2">Licence 3</option>
            </select>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <button>Soumettre</button>
      </form>
    </div>

    <script
      src="https://kit.fontawesome.com/2bc4ad52f1.js"
      crossorigin="anonymous"
    ></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="src/master.js"></script>
  </body>
</html>
