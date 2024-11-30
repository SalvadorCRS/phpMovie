 
    
    <?php
     const API_URL = "https://whenisthenextmcufilm.com/api";
     #comentarios en php
    $ch = curl_init(API_URL);
    //indicar el que queremos recibir 
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    
    $result =curl_exec($ch);

    $data = json_decode($result, true );
    curl_close($ch);
    ?>
      <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
        >
        <title>Next Marvel Movie</title>
    </head>
    <body>
    <main>
        <section>
            <img src="<?= $data["poster_url"]; ?>" width="300"  alt="poster de <?= $data["title"]; ?>">
        </section>
        <hgroup>
            <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> days</h3>
            <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
            <p> Next one  <?=  $data["following_production"]["title"]; ?> fecha de estreno : <?=  $data["following_production"]["release_date"];?></p>
        </hgroup>   
    </main>
    </body>
    </html>
  
    <style>
        img {
          margin: 0 auto;  
        }
        section{
            display: flex;
            justify-content: center;
            text-align: center;
        }
        hgroup{
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        :root {
            color-scheme: light dark;
        }

        body {
            display: grid;
            place-content: center;
        }
    </style>