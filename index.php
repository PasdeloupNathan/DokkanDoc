<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.min.css">
    <title>Project Dokkan</title>
</head>

<body>

    <!-- HEADER  -->

    <Header>
        <div class="menu row align-items-center">

            <!-- LOGO  -->

            <div class="col-2 logo">
                <img src="https://vignette.wikia.nocookie.net/dokkanbattlefr/images/3/37/DS.png/revision/latest?cb=20161219163941&path-prefix=fr" alt="logo">
            </div>

            <!-- NAV  -->

            <div class="row align-items-center col-8 nav">

                <div class="col">Home</div>
                <div class="col">Best by cat</div>
                <div class="col">Friends team</div>
                <div class="col">Profile</div>
            </div>

            <!-- LOGIN -->

            <div class="row align-items-center col-2 login">
                <div class="col">Login/Sign In</div>
            </div>
        </div>
    </Header>

    <!-- MAIN  -->

    <main>

        <!-- FIL NEWS  -->

        <section class="row mainly">

            <!-- Colone Gauche  -->

            <div class="col-2 gauche"></div>

            <!-- Colone Milieux  -->

            <div class="row col-8 midle">
                <div class="row col-12 fil">
                    <h2>Newest Team </h2>
                    <h3> Best Team Random Display </h3>
                    <h4 class="teamName">Kamehameha Team</h4>
                    <br>
                    <div class="row teamList">
                        <div class="col-2 leaderMain"> <p>Leader</p> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/f/f3/Card_1017630_thumb_apng.png/revision/latest?cb=20190829045927&format=original" alt="Gohan LR"></div>
                        <div class="col-2"> <br> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/9/9f/Card_1012930_thumb_apng.png/revision/latest?cb=20190117160532&format=original" alt="Gogeta LR"></div>
                        <div class="col-2"> <br> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/9/9b/Card_1012900_thumb_apng.png/revision/latest?cb=20190117171239&format=original" alt="Vegeto LR"></div>
                        <div class="col-2"> <br> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/4/45/Card_1018250_thumb_apng.png/revision/latest?cb=20200217134245&format=original" alt="Goku God LR"></div>
                        <div class="col-2"> <br> <img class="iconT"src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/c/c9/Card_1014210_thumb_apng.png/revision/latest?cb=20190130084752&format=original" alt="Goku4 LR"> </div>
                        <div class="col-2"> <br> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/3/31/Card_1016810_thumb_apng.png/revision/latest?cb=20190507110857&format=original" alt="Gohan goten LR"></div>
                    </div>
                    <h4 class="teamName">Super Saiyan Half Blood Saiyan Team</h4>
                    <br>
                    <div class="row teamList">
                        <div class="col-2 leaderMain"> <p>Leader</p> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/f/f3/Card_1017630_thumb_apng.png/revision/latest?cb=20190829045927&format=original" alt="Gohan LR"></div>
                        <div class="col-2"> <br> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/9/9f/Card_1012930_thumb_apng.png/revision/latest?cb=20190117160532&format=original" alt="Gogeta LR"></div>
                        <div class="col-2"> <br> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/9/9b/Card_1012900_thumb_apng.png/revision/latest?cb=20190117171239&format=original" alt="Vegeto LR"></div>
                        <div class="col-2"> <br> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/4/45/Card_1018250_thumb_apng.png/revision/latest?cb=20200217134245&format=original" alt="Goku God LR"></div>
                        <div class="col-2"> <br> <img class="iconT"src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/c/c9/Card_1014210_thumb_apng.png/revision/latest?cb=20190130084752&format=original" alt="Goku4 LR"> </div>
                        <div class="col-2"> <br> <img class="iconT" src="https://vignette.wikia.nocookie.net/dbz-dokkanbattle/images/3/31/Card_1016810_thumb_apng.png/revision/latest?cb=20190507110857&format=original" alt="Gohan goten LR"></div>
                    </div>
                </div>
                <div class="col-12 FriendNews"></div>

            </div>

            <!-- Colone Droite  -->

            <div class="row col-2 droite"></div>

        </section>
    </main>


    <!-- SCRIPT  -->

    <script src="./assets/js/Leader.js"></script>
    <script>
        console.log(leader[0])
    </script>
</body>

</html>