<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Parking REST-API</title>
    <!--    css-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <!--    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!--    scripts-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>


</head>
<body>
<div class="container">
    <br>
    <h6>number – регистрационен номер на превозното средство,</h6>
    <h6>vehicle_Id – UUID номер на превозното средство (ползва се за по-голяма сигурност),</h6>
    <h6>parking_Id – UUID номер на паркиг операцията (ползва се за по-голяма сигурност),</h6>
    <h6>class – клас превозно средство - A - лек автомобил/мотор; B – бус; C - Автобус/камион,</h6>
    <h6>discounts – вид ползвана отстъпка - Silver: 10%; Gold: 15%; Platinum: 20%</h6>
    <hr>
    <br>
    <table class="table table-bordered table-striped table-sm responsive">
        <thead>
        <tr>
            <th scope="col" style="width: 15%">End Point</th>
            <th scope="col" style="width: 30%">Description</th>
            <th scope="col" style="width: 30%">Result</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">/space</th>
            <td>Проверка на брой свободни места на паркинга.</td>
            <td>връща брой свободни места</td>
        </tr>
        <tr>
            <th scope="row">/bill/{parking_id}/{time?}</th>
            <td>Проверка на текущо дължима сума на превозно средство с даден номер. Ако не се напише {time} – означава сега.</td>
            <td>връща дължимата сума към момента {time}. Също така и пълна разбивка на смятаната сума.</td>
        </tr>
        <tr>
            <th scope="row">/entry/{vehicle_id}</th>
            <td>Вход в паркинга - регистрация на превозното средство (вход е възможен само за предварително регистрирани превозни средства)</td>
            <td> връща <b>parking_id</b> <br><b style="color: red"> (пазете този номер, няма откъде другъде да бъде взет)</b></td>
        </tr>
        <tr>
            <th scope="row">/exit/{parking_id}</th>
            <td>Изход от паркинга - дерегистрация на превозното средство</td>
            <td> връща дължимата сума в същия формат като /bill</td>
        </tr>
        <tr>
            <th scope="row">/register/{number}/{class}</th>
            <td>Регистрация на ново превозно средство</td>
            <td> връща <b>vehicle_id</b> – уникален номера при регистрирания нов автомобил <br><b style="color: red"> (пазете този номер, няма откъде другъде да бъде взет)</b></td>
        </tr>
        <tr>
            <th scope="row">/discounts/{vehicle_id}/{discount_id}</th>
            <td>Въвеждане на отстъпки</td>
            <td> връща текущо ползваната отстъпка</td>
        </tr>
        <tr>
            <th scope="row">/discounts/{vehicle_id}</th>
            <td>Проверка на отстъпка</td>
            <td> връща текущо ползваната отстъпка</td>
        </tr>
        <tr>
            <th scope="row">/classes</th>
            <td>Проверка на наличните типове превозни средства</td>
            <td> връща имената на наличните типове превозни средства с прилежащите id-та</td>
        </tr>
        <tr>
            <th scope="row">/discounts</th>
            <td>Проверка на наличните видове отстъпки</td>
            <td>връща имената на наличните видове отстъпки с прилежащите id-та</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
