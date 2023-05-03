<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>BadWords</title>
</head>

<body>
    <main>
        <div class="container-fluid d-flex justify-content-center">
            <div class="card" style="width: 45rem;">
                <img class="img-fluid" src="https://sp.rmbl.ws/s8/6/E/L/a/u/ELaua.qR4e.2.jpg" class="card-img-top"
                    alt="censored">
                <div class="card-body">
                    <h5 class="card-title text-center">Censura la parola</h5>
                    <p class="card-text text-center">Inserisci un paragrafo e la parola da censurare, poi premi invio
                    </p>
                    <form action="" method="get">
                        <div class="mb-3">
                            <label for="paragraph" class="form-label">Paragrafo</label>
                            <textarea class="form-control" id="paragraph" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="badword" class="form-label">Parola da censurare</label>
                            <input type="email" class="form-control" id="badword">
                            <div class="send d-flex justify-content-center">
                                <button type="submit" class="w-50 btn btn-primary mt-3">Censura</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>