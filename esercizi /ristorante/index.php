<!doctype html>
<html lang="en">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
    <?php
        $array = array(1, 2, 3, 4, 5);
        foreach ($array as $item) 
        {
        ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/71ftx+nXZuL._SL1500_.jpg" class="img-fluid rounded-start" alt="il santo">
              </div>
              <div class="col-md-8">
                <div class="card-body">IL SANTO</h5>
                  <p class="card-text">Di Marco Travaglio</p>
                  <p class="card-text"><small class="text-body-secondary">Il libro definitivo con tutto ciò che dobbiamo sapere e ricordare per evitare il pericolo peggiore: il berlusconismo senza Berlusconi.</small></p>
                </div>
              </div>
            </div>
          </div>
        <?php
        echo "$item";
        }
        
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e7924d;
        color: #333;
    }
    h1 {
        color: #d87c04;
        text-decoration: underline;
    }
    .section {
        margin-bottom: 20px;
        background-color: #fcd3b1;
        padding: 20px;
        border-radius: 5px;
    }
    h2 {
        color: #773702;
    }
    strong {
        color: #f19137;
    }
    em {
        color: #f0965a;
    }
</style>

</html>