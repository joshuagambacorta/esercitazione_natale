<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Progetto 26_11</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./mystyle.css">
        <script src="./myscript.js"></script>

        <?php
        include './model.php';
        ?>
    </head>

    <body>
        <div class="container pt-4">
            <div class="text-center">
                <h1><strong><i>Biglietteria</i></strong</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <form action="controller.php" method="POST">
                            <label for="exampleFormControlSelect1">Seleziona il concerto</label>
                            <select class="form-control col-4" id="exampleFormControlSelect0"  name="concert">
                                <option value="option" disabled selected>Select your option</option>
                                <?php
                                foreach ($file as $concerto) {
                                    echo "<option class='concerts' id='$concerto' value='$concerto'>$concerto</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <div class="if_concerto_is_set">
                                <hr>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <span id="info_concert"></span>
                                    </div>
                                </div>
                                <br><br>
                                <br>
                                <h3><strong><i>Aquista qui i tuoi biglietti: </i></strong></h3>
                                <br>
                                <div class="row">
                                    <div class="name col-4">
                                        <label for="name">Nome</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                        <small id="errorName">Nome non valido*</small>
                                    </div>
                                    <div class="surname col-4">
                                        <label for="surname">Cognome</label>
                                        <input type="text" id="surname" name="surname" class="form-control">
                                        <small id="errorSurname">Cognome non valido*</small>
                                    </div>
                                    <div class="n_tickets col-4">
                                        <label for="n_tickets">Numero biglietti</label>
                                        <select class="form-control" id="n_tickets" name="n_tickets">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <button type="submit" id="purchase" class="btn btn-outline-primary">Aquista</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="container pt-4 text-center text-danger" id="not_disponibility">
            <h3><strong><i>Spiacenti i biglietti sono terminati</i></strong></h3>
        </div>
    </body>

</html>