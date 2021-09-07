<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="body">
    
    <?php include 'header.php' ?>
    <div class="main col-8 offset-2">

        <div class="row about_me">

            <div class="col-12">
                <div class="row">

                    <h1>  <?php  echo $p  ?> </h1>

                </div>

                <div class="row">

                    <div class="myPerson col-4">
                        <?php  echo "<img id='person' class='img-fluid' src='/img/person.jpg'>"; ?>
                        <span>Изображение взято с ресурса <a href="https://thispersondoesnotexist.com/">https://thispersondoesnotexist.com/</a></span>
                    </div>

                    <div class="bio col-7 offset-1">
                        <p> Здравствуйте, меня зовут
                            <?php echo $name, ' ', $surname,'.' . '<br>'; ?>
                        </p>
                        <p>Я из города <?php echo ' ', $city, '.'; ?> </p>
                        <p> Мне
                            <?php  echo $age;?>
                            лет.</p>
                        <p> Люблю волейбол и вкусно покушать. </p>
                        <p> Хочу стать крутым разработчиком. </p>
                    </div>

                </div>
            </div>
        </div>

        <?php  include 'knowledge.inc.php'; ?>

        </div>

            <div class="article">
                <p class="text">
                    После JS. Возможность PHP собирать верстку как конструктор без танцев с
                    бубном кажется глотком свежего весеннего воздуха после трех часов в переполненной маршрутке.

                </p>
            </div>
        </div>

        <?php include 'footer.inc.php' ?>


        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
