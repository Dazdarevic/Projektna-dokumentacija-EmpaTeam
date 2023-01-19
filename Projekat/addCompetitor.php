<?php
include "code.php";
// session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <!-- <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> -->
    <link rel="icon" href="./img/logo.PNG" type="image/gif" >
    <title>MigApp</title>
    <style>
        .update {
          background-color: #fff;
        }
        .update h2 {
          color: #104e8b;
          padding: 20px 0 0 40px;
        }
        .update input {
          padding-left: 10px;
        }
        /* USPESNO ODOBRENO */
        div.uspesno-odobrenje {
            width: 560px;
            padding: 20px 0px 20px 20px;
            margin: 10px 0;
            font-size: 16px;
            background-color: #9fe6a0;
            position: relative;
            border-left: 6px solid #4aa96c;
            /* display: none; */
        }
        div.uspesno-odobrenje p span {
            font-weight: bold !important;
        }
        div.uspesno-odobrenje i {
            padding: 0 10px 0 0;
            color: #4aa96c;
            font-size: 20px;
        }
        div.uspesno-odobrenje i.fa-times {
            font-size: 25px;
            position: absolute;
            top: 7px;
            right: 0;
        }
        div.uspesno-odobrenje i.fa-times:hover {
            cursor: pointer;
            color: #564a4a;
        }
        /* USPESNO IZBRISANO */
        div.uspesno-izbrisano {
            width: 560px;
            padding: 20px 0px 20px 20px;
            margin: 10px 0;
            font-size: 16px;
            background-color: #feceab;
            position: relative;
            border-left: 6px solid #ff847c;
            display: block;
        }
        div.uspesno-izbrisano p span {
            font-weight: bold;
        }
        div.uspesno-izbrisano i {
            padding: 0 10px 0 0;
            color: #ff847c;
            font-size: 20px;
        }
        div.uspesno-izbrisano i.fa-times {
            font-size: 25px;
            position: absolute;
            top: 7px;
            right: 0;
        }
        div.uspesno-izbrisano i.fa-times:hover {
            cursor: pointer;
            color: #564a4a;
        }
        /* USPESNO IZBRISANO KRAJ */
        .table {
            width: 100%;
            display: table;
            font-size: 14px;
            table-layout: fixed;
            border-collapse: collapse;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.3);
        }
        .table th, .table td {
            padding: 12px 15px;
            display: table-cell;
            text-align: center;
            border-bottom: 2px solid #ddd;
            vertical-align: middle;
            word-wrap: break-word;
            width: 10%;
            /* width: 10%; */
        }
        .table th {
            background-color: #104e8b;
            color: #fff;
            font-size: 1rem;
        }
        .table tbody td {
            background-color: #fff;
        }
        /* RESPONSIVE */
        @media(max-width: 800px)
        {
            .table thead
            {
                display: none;
            }
            .table, .table tbody, .table tr, .table td
            {
                display: block;
                width: 100%;
            }
            .table tr
            {
                margin-bottom: 15px;
            }
            .table td
            {
                text-align: right;
                padding-left: 50%;
                text-align: right;
                position: relative;
            }
            .table td:before
            {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
                color: #104e8b;
            }
        }
        .fa-pencil-alt {
            color: #1597BB;
            background-color: #E8EAE6;
            padding: 10px;
            font-size: 1rem;
            border-radius: 50%;
        }
        .fa-pencil-alt:hover {
            background-color: lightgrey;
            cursor: pointer;
            transition: .2s;
        }
        .fa-trash {
            color: #FF4646;
            background-color: #E8EAE6;
            padding: 10px;
            font-size: 1rem;
            border-radius: 50%;
        }
        .fa-trash:hover {
            background-color: lightgrey;
            cursor: pointer;
            transition: .2s;
        }
        .search-add {
            outline: none;
            display: flex;
            justify-content: space-between;
            margin: 10px 0 45px;
            background: #fff;
            height: 100px;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.3);
        }
        .search-add button {
            margin: 0;
            padding: 0;
            width: 130px;
            border-radius: 10px;
            margin-right: 20px;
            background: #104e8b;
            font-size: 15px;
        }
        .search-add button:hover {
           box-shadow: 0px 2px 5px rgba(0,0,0,0.3);
        }
        .search-add div {
            margin-left: 50px;
            display: flex;
            justify-content: center;
        }
        .search-add div input {
            width: 200px;
            height: 35px;
            border: 1px solid #104e8b;
            border-radius: 20px;
            padding-left: 10px;
            margin-left: 10px;
        }
        .search-add div button {
          width: 50px;
          border-radius: 20px;
          height: 35px;
          margin-right: 10px !;
        }
        .search-add div i {
            background: #104e8b;
            color: #fff;
            font-size: 16px;
        }
        .btn-pagination {
            color: #104e8b;
            border: 1px solid #104e8b;
            padding: 5px;
            margin: 4px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .btn-pagination:hover {
            background: #104e8b;
            color: white;
            transition: .5s;
        }
        .pagination-item {
            display: flex;
            justify-content: center;
        }
        .active {
            background: #104e8b;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo-naslov">
            <a href="index.php"><img src="./img/logo.PNG" class="logo" alt="Logo" width="40px" height="40px" id="logo"></a>
            <h2>MigApp</h2>
        </div>
        <div class="sidebar-brands">
            <?php
              include("conn.php");
              $query="SELECT ime, prezime, korisnicko_ime, profilna, uloga, id_admina FROM `admin_table` WHERE `korisnicko_ime`='$_SESSION[AdminLoginId]'";
              $result=mysqli_query($conn, $query);

              while($rows=mysqli_fetch_assoc($result))
              {
            ?>
            <img src="<?php echo $rows['profilna']?>" class="logo" alt="Logo" width="90px" height="90px" id="logo" style="margin:0 0 5px 0;">
            <h4 style="margin-bottom: 5px;"><?php echo $rows['korisnicko_ime']?></h4>
            <p style="margin-bottom: 50px;"><?php echo $rows['uloga']?></p>
        </div>
        <div class="sidebar-menu">
            <li>
                <a href="adminPanel.php"><i class="fas fa-home"></i><span>Radna ploča</span></a>
            </li>
            <li class="active">
                <a href="migranti.php"><i class="fas fa-users"></i><span>Migranti</span></a>
            </li>
            <li>
                <a href="novosti.php"><i class="far fa-newspaper"></i><span>Novosti</span></a>
            </li>
            <li>
                <a href="vesti2.php"><i class="far fa-list-alt"></i><span>Vesti</span></a>
            </li>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <i class="fas fa-bars"></i>
                Migranti
            </h2>
            <div class="user-wrapper">
                <ul>
                    <li><a href="#"><i class="far fa-envelope"></i></a></li>
                    <li><a href="#"><i class="fas fa-bell"></i></a></li>
                    <li id="profile">
                        <a href="#"><i class="fas fa-user-circle"></i>Belkisa Dazdarević<i class="fas fa-angle-down"></i></a>
                        <div id="drop-down">
                            <a href="mojprofil.php" class="clinks"><i class="fas fa-user-circle"></i>Profil</a>
                            <a href="#" class="clinks"><i class="fas fa-cog"></i>Podešavanja</a>
                            <form action="code.php" method="post">
                                <button type="submit" name="logout" class="clinks btn-logout" style="padding-right: 115px; background-color: #f1f5f9;"><i class="fas fa-power-off"></i>Odjavi se</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <main>
          <div class="update">
                <h2>Dodajte novog migranta</h2>
                <div class="contact-form-text">
                    <form action="code.php" method="post" role="form" enctype="multipart/form-data">
                        <div class="contact-form-text">
                            <input type="text" name="ime" id="ime" placeholder="Ime" required>
                        </div>
                        <div class="contact-form-text">
                            <input type="text" name="prezime" id="prezime" placeholder="Prezime" required>
                        </div>
                        <div class="contact-form-text">
                            <input type="text" name="mesto_rodjenja" id="mesto_rodjenja" placeholder="Mesto rođenja">
                        </div>
                        <div class="contact-form-text">
                            <input type="number" name="jmbg" id="jmbg" placeholder="JMBG">
                        </div>
                        <div class="contact-form-text">
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="contact-form-text">
                            <input type="text" name="korisnicko_ime" id="korisnicko_ime" placeholder="Korisničko ime" required>
                        </div>
                        <div class="contact-form-text">
                            <input type="password" name="lozinka" id="lozinka" placeholder="Lozinka" required>
                        </div>
                        <label for="profilna" class="profilna" style="color: black;">Profilna fotografija:</label>
                        <input type="file" name="profilna" id="profilna" required>
                        <div class="contact-form-text">
                            <label for="pol" style="color: black;">Pol:</label>
                            <select id="pol" name="pol">
                            <option value="M" width="100px">Muško</option>
                            <option value="Ž">Žensko</option>
                            </select>
                        </div>
                        <div class="contact-form-text">
                            <label for="uloga" style="color: black;">Uloga:</label>
                            <select id="uloga" name="uloga" required>
                                <option value="Migrant">Migrant</option>
                            </select>
                        </div>
                        <a href="takmicari.php" style="color: white; display: inline-block; width:100px; height:40px; text-align: center;
                        padding-top: 10px; margin-left:20px; background:#FF4646; font-size: 15px;">
                          Odustani
                        </a>


                        <input type="hidden" type="submit" name="admin" placeholder="Izbriši" value="<?= $rows['id_admina'];?>">
                        <button type="submit" name="addCompetitor" style="background: #1597BB; width:100px;">
                          Dodaj
                        </button>
                    </form>
                </div>
            </div>
            <?php
          }
            ?>
        </main>
    </div>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>
