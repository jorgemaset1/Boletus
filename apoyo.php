
        if (isset($_SESSION['v1']) && numeroVecinos($i, $j)== 1) {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_SESSION['v2']) && numeroVecinos($i, $j)== 2) {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_SESSION['v3']) && numeroVecinos($i, $j)== 3) {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_SESSION['v4']) && numeroVecinos($i, $j)== 4) {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_SESSION['v5']) && numeroVecinos($i, $j)== 5) {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_SESSION['v6']) && numeroVecinos($i, $j)== 6) {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_SESSION['v7']) && numeroVecinos($i, $j)== 7) {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_SESSION['v8']) && numeroVecinos($i, $j)== 8) {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_SESSION['m1']) && numeroVecinos($i, $j)== 1) {
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else if (isset($_SESSION['m2']) && numeroVecinos($i, $j)== 2) {
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else if (isset($_SESSION['m3']) && numeroVecinos($i, $j)== 3) {
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else if (isset($_SESSION['m4']) && numeroVecinos($i, $j)== 4) {
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else if (isset($_SESSION['m5']) && numeroVecinos($i, $j)== 5) {
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else if (isset($_SESSION['m6']) && numeroVecinos($i, $j)== 6) {
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else if (isset($_SESSION['m7']) && numeroVecinos($i, $j)== 7) {
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else if (isset($_SESSION['m8']) && numeroVecinos($i, $j)== 8) {
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else{
          $casilla = $_POST[$i.$j];
        }