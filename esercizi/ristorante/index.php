<!doctype html>
<html lang="en">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <h1>Pizzeria Zeb89</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./catalogo.html">Catalogo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contatti.html">Contatti</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  <section class="section">
    <?php
        $pizze = array(
        array("nome"=> "margherita", "prezzo" => 5.50,"immagine" => ,"ingredienti" =>"pomodoro e mozzarella"),
        array("nome"=> "diavola", "prezzo" => 7 ,"immagine" => ,"ingredienti" =>  "pomodoro, mozzarella e salamino piccante" ),
        array("nome"=> "papatosa", "prezzo" => 7,"immagine" => ,"ingredienti" => "pomodoro, mozzarella e patatine fritte"  ),
        array("nome"=> "marinara", "prezzo" =>  4.50,"immagine" => ,"ingredienti" =>  "pomodoro e aglio" ),
        array("nome"=> "prosciutto e funghi", "prezzo" => 7,"immagine" => ,"ingredienti" =>  "pomodoro, mozzarella, prosciutto e funghi" ),
        array("nome"=> "pizza zeb89", "prezzo" => 9999.99,"immagine" => "data:image/jpeg;base64,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","ingredienti" => "crema di tartufo, mozzarella, prosciutto cotto e porcini" ),
        );
        foreach ($pizze as $item) 
        {
        ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src=$item["immagine"] class="img-fluid rounded-start" alt="pizza">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-ttitle">$item["nome"] </h5>
                  <p class="card-text">$item["prezzo"]</p>
                  <p class="card-text">$item["ingredienti"]</p>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        
    ?>
    </section >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  <style>
    body {
        font-family: Arial, sans-serif;
        background-image:URL("https://i.ytimg.com/vi/7VgvVG1dzfI/mqdefault.jpg");
        background-size:cover;
        color: #333;
    }
    h1 {
        color: #300066;
        text-decoration: underline;
    }
    .section {
        margin-bottom: 20px;
        background-color: #dfdfdf;
        padding: 20px;
        border-radius: 5px;
    }
    h2 {
        color: rgb(83, 3, 175);
    }
    strong {
        color: #f19137;
    }
    em {
        color: #f0965a;
    }
</style>

</html>