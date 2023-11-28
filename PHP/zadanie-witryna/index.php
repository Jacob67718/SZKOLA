<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
.nav{
    width: 12%;
    height: 80px;
    margin: auto;
    background-color: #f1e3dd;
    border-radius: 10px;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);

}
.select{
    width: 10%;
    margin-left: 10px;
    margin-right: 10px;
    height: 50%;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);

}
nav{
    width: 100%;
    height: 80px;
    justify-content: space-between;
    display: flex;
    position: relative;
    padding-top: 40px;
}
</style>
<body>
    <header><img src="nurse.png" title='nurse' class='nurse' alt='nurse'><br><div id="naglowek"><h1>Klinika "JASMED"</h1></div><img src="nurse.png" alt='nurse' title='nurse' class='nurse' style='right: 25px; top: 20px;'><br>
        <form method='POST'>
        <div id="container">
            <button class='menu' name='btn1'><h2>BMI</h2></button>
            <button class='menu' name='btn2'><h2>POZYCJA</h2></button>
            <button class='menu' name='btn3'><h2>TYPY</h2></button>
            <button class='menu' name='btn4'><h2>USLUGI</h2></button>
            <button class='menu' name='btn5'><h2>WYNIK</h2></button>
            <button class='menu' name='btn6'><h2>ZDJECIA</h2></button>
        </div>
        </form>
    </header>
    <form method='POST'><nav><button name='find' class='nav'><h2>ZNAJDZ</h2></button>
    <select name='select' class='select'>
        <option></option>
        <option>BMI</option>
        <option>pozycja</option>
        <option>typy</option>
        <option>uslugi</option>
        <option>wynik</option>
        <option>zdjecia</option>
    </select><h2 style='margin-top:-15px'>GDZIE</h2>
    <input type='text' name='where' class='select' >
    <select name='join_1' class='select' id='join1'>
        <option></option>
        <option>uslugi</option>
        <option>wynik</option>
    </select><h2 style='margin-top:-15px'>i</h2>
    <select name='join_2' class='select' id='join2'>
        <option></option>
        <option>pozycja</option>
        <option>BMI</option>
    </select>
    <button name='join' class='nav' id='join'><h2>ZESTAW</h2></button></nav></form>
    <main>
        <script>
            function hideColumnsBMI(indexKolumny) {
                let table = document.getElementById('TabelaBMI');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsPOZYCJA(indexKolumny) {
                let table = document.getElementById('TabelaPOZYCJA');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsTYPY(indexKolumny) {
                let table = document.getElementById('TabelaTYPY');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsUSLUGI(indexKolumny) {
                let table = document.getElementById('TabelaUSLUGI');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsWYNIK(indexKolumny) {
                let table = document.getElementById('TabelaWYNIK');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsZDJECIA(indexKolumny) {
                let table = document.getElementById('TabelaZDJECIA');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsUSLUGIXPOZYCJA(indexKolumny) {
                let table = document.getElementById('TabelaUSLUGIXPOZYCJA');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsWYNIKXBMI(indexKolumny) {
                let table = document.getElementById('TabelaWYNIKXBMI');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsBMI_WHERE(indexKolumny) {
                let table = document.getElementById('TabelaBMI_WHERE');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsPOZYCJA_WHERE(indexKolumny) {
                let table = document.getElementById('TabelaPOZYCJA_WHERE');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsTYPY_WHERE(indexKolumny) {
                let table = document.getElementById('TabelaTYPY_WHERE');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsUSLUGI_WHERE(indexKolumny) {
                let table = document.getElementById('TabelaUSLUGI_WHERE');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsWYNIK_WHERE(indexKolumny) {
                let table = document.getElementById('TabelaWYNIK_WHERE');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            function hideColumnsZDJECIA_WHERE(indexKolumny) {
                let table = document.getElementById('TabelaZDJECIA_WHERE');
                for (let i = 0; i < table.rows.length; i++) {
                    table.rows[i].cells[indexKolumny].style.display = 'none';
                }
            }

            document.getElementById('join1').onchange = () =>{
                let lewySelect = document.getElementById('join1');
                let prawySelect = document.getElementById('join2');

                if(lewySelect.value == 'uslugi'){
                    prawySelect.value = 'pozycja';
                }
                if(lewySelect.value == 'wynik'){
                    prawySelect.value = 'BMI';
                }
            }

            document.getElementById('join2').onchange = () =>{
                let lewySelect = document.getElementById('join1');
                let prawySelect = document.getElementById('join2');

                if(prawySelect.value == 'BMI'){
                    lewySelect.value = 'wynik';
                }
                if(prawySelect.value == 'pozycja'){
                    lewySelect.value = 'uslugi';
                }
                
            }
        </script>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbanme = "egzamin2";
            $conn = mysqli_connect($servername, $username, $password, $dbanme);
            mysqli_set_charset($conn, "utf8");
            
            

            if(isset($_POST['select'])){
                $tabela = $_POST['select'];
                $zapytanie = $_POST['where'];

                if($tabela == 'BMI'){
                    $q = "SELECT * FROM $tabela WHERE $zapytanie;";
        
                    $result = mysqli_query($conn, $q);
                    echo "<form method='POST'>";
                    echo "<table id='TabelaBMI_WHERE'>";
                    echo "<tr><th>ID </th>
                    <th>WARTOŚĆ MINIMALNA </th>
                    <th>WARTOŚĆ MAKSYMALNA </th>
                    <th>INFORMACJA </th></tr>";
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                    }
                    echo "<tr>
                    <th><button type='button' onclick='hideColumnsBMI_WHERE(0)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsBMI_WHERE(1)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsBMI_WHERE(2)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsBMI_WHERE(3)'>X</button></th>
                    </tr>";
                    echo "</table>";
                    echo "</form>";
                    
                    mysqli_free_result($result);
                }
                if($tabela == 'pozycja'){
                    $q = "SELECT * FROM $tabela WHERE $zapytanie;";

                    $result = mysqli_query($conn, $q);
                    echo "<form method='POST'>";
                    echo "<table id='TabelaPOZYCJA_WHERE'>";
                    echo "<tr><th>ID </th>
                    <th>NAZWA </th></tr>";
                    while($row = mysqli_fetch_row($result)){
                            echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                    }
                    echo "<tr>
                    <th><button type='button' onclick='hideColumnsPOZYCJA_WHERE(0)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsPOZYCJA_WHERE(1)'>X</button></th>
                    </tr>";
                    echo "</table>";
                    echo "</form>";

                    mysqli_free_result($result);
                }
                if($tabela == 'typy'){
                    $q = "SELECT * FROM $tabela WHERE $zapytanie;";

                    $result = mysqli_query($conn, $q);
                    echo "<form method='POST'>";
                    echo "<table id='TabelaTYPY_WHERE'>";
                    echo "<tr><th>ID </th>
                    <th>KATEGORIA </tr>";
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                    }
                    echo "<tr>
                    <th><button type='button' onclick='hideColumnsTYPY_WHERE(0)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsTYPY_WHERE(1)'>X</button></th>
                    </tr>";
                    echo "</table>";
                    echo "</form>";

                    mysqli_free_result($result);
                }
                if($tabela == 'uslugi'){
                    $q = "SELECT * FROM $tabela WHERE $zapytanie;";

                    $result = mysqli_query($conn, $q);
                    echo "<form method='POST'>";
                    echo "<table id='TabelaUSLUGI_WHERE'>";
                    echo "<tr><th>ID </th>
                    <th>POZYCJA </th>
                    <th>RODZAJ </th>
                    <th>NAZWA </th>
                    <th>CENA </th></tr>";
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                    }
                    echo "<tr>
                    <th><button type='button' onclick='hideColumnsUSLUGI_WHERE(0)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsUSLUGI_WHERE(1)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsUSLUGI_WHERE(2)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsUSLUGI_WHERE(3)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsUSLUGI_WHERE(4)'>X</button></th>
                    </tr>";
                    echo "</table>";
                    echo "</form>";

                    mysqli_free_result($result);
                }
                if($tabela == 'wynik'){
                    $q = "SELECT * FROM $tabela WHERE $zapytanie;";

                    $result = mysqli_query($conn, $q);
                    echo "<form method='POST'>";
                    echo "<table id='TabelaWYNIK_WHERE'>";
                    echo "<tr><th>ID </th>
                    <th>INFORMACJA </th>
                    <th>DATA </th>
                    <th>WYNIK </th></tr>";
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                    }
                    echo "<tr>
                    <th><button type='button' onclick='hideColumnsWYNIK_WHERE(0)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsWYNIK_WHERE(1)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsWYNIK_WHERE(2)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsWYNIK_WHERE(3)'>X</button></th>
                    </tr>";
                    echo "</table>";
                    echo "</form>";
                    
                    mysqli_free_result($result);
                }
                if($tabela == 'zdjecia'){
                    $q = "SELECT * FROM $tabela WHERE $zapytanie;";

                    $result = mysqli_query($conn, $q);
                    echo "<form method='POST'>";
                    echo "<table id='TabelaZDJECIA_WHERE'>";
                    echo "<tr><th>ID </th>
                    <th>ZDJĘCIE </th>
                    <th>PODPIS </th></tr>";
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td><img class='zdjecie' title='kot :3' alt='kot :3' src='". $row[1] ."'></td><td>". $row[2] ."</td></tr>";
                    }
                    echo "<tr>
                    <th><button type='button' onclick='hideColumnsZDJECIA_WHERE(0)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsZDJECIA_WHERE(1)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsZDJECIA_WHERE(2)'>X</button></th>
                    </tr>";
                    echo "</table>";
                    echo "</form>";
                    

                    mysqli_free_result($result);
                }
            }
                
               
            
            //JOIN POCZATEK #################################################################################################
            if(isset($_POST['join'])){
                $join1 = $_POST['join_1'];
                $join2 = $_POST['join_2'];
                if($join1 == 'uslugi' && $join2 == 'pozycja'){
                    $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id;";
            
                    $result = mysqli_query($conn, $q);
                    echo "<form method='POST'>";
                    echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                    echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                    <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                    <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                    <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                    <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                    }
                    echo "<tr>
                    <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                    </tr>";
                    echo "</table>";
                    echo "</form>";

                    mysqli_free_result($result);
                }

                if($join1 == 'wynik' && $join2 == 'BMI'){
                    $q = "SELECT w.id, b.informacja, w.data_pomiaru, w.wynik FROM wynik AS w JOIN BMI AS b ON b.id = w.bmi_id;";
            
                    $result = mysqli_query($conn, $q);
                    echo "<form method='POST'>";
                    echo "<table id='TabelaWYNIKXBMI'>";
                    echo "<tr><th>ID <button class='nasc' name='wynikXbmiID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiID2'><img src='9-1.png'></button></th>
                    <th>INFORACJA <button class='nasc' name='wynikXbmiINF1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiINF2'><img src='za.png'></button></th>
                    <th>DATA <button class='nasc' name='wynikXbmiDAT1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiDAT2'><img src='9-1.png'></button></th>
                    <th>WYNIK <button class='nasc' name='wynikXbmiWYN1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiWYN2'><img src='za.png'></button></th></tr>";
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                    }
                    echo "<tr>
                    <th><button type='button' onclick='hideColumnsWYNIKXBMI(0)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsWYNIKXBMI(1)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsWYNIKXBMI(2)'>X</button></th>
                    <th><button type='button' onclick='hideColumnsWYNIKXBMI(3)'>X</button></th>
                    </tr>";
                    echo "</table>";
                    echo "</form>";

                    mysqli_free_result($result);
                }
                    
            }
            if(isset($_POST['uslugiXpozycjaID1'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY u.id;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiXpozycjaID2'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY u.id DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['uslugiXpozycjaPOZ1'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY p.nazwa;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiXpozycjaPOZ2'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY p.nazwa DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['uslugiXpozycjaRODZ1'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY u.rodzaj;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiXpozycjaRODZ2'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY u.rodzaj DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['uslugiXpozycjaNAZW1'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY u.nazwa;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiXpozycjaNAZW2'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY u.nazwa DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['uslugiXpozycjaCEN1'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY u.cena;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiXpozycjaCEN2'])){
                $q = "SELECT u.id, p.nazwa, u.rodzaj, u.nazwa, u.cena FROM uslugi AS u JOIN pozycja AS p ON u.kadra_id = p.id ORDER BY u.cena DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGIXPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiXpozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiXpozycjaPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiXpozycjaRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiXpozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiXpozycjaNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiXpozycjaCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiXpozycjaCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGIXPOZYCJA(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            //#########################################################################################################################################################################

            if(isset($_POST['wynikXbmiID1'])){
                $q = "SELECT w.id, b.informacja, w.data_pomiaru, w.wynik FROM wynik AS w JOIN BMI AS b ON b.id = w.bmi_id ORDER BY w.id;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIKXBMI'>";
                echo "<tr><th>ID <button class='nasc' name='wynikXbmiID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikXbmiINF1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikXbmiDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikXbmiWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikXbmiID2'])){
                $q = "SELECT w.id, b.informacja, w.data_pomiaru, w.wynik FROM wynik AS w JOIN BMI AS b ON b.id = w.bmi_id ORDER BY w.id DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIKXBMI'>";
                echo "<tr><th>ID <button class='nasc' name='wynikXbmiID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikXbmiINF1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikXbmiDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikXbmiWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikXbmiINF1'])){
                $q = "SELECT w.id, b.informacja, w.data_pomiaru, w.wynik FROM wynik AS w JOIN BMI AS b ON b.id = w.bmi_id ORDER BY b.informacja;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIKXBMI'>";
                echo "<tr><th>ID <button class='nasc' name='wynikXbmiID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikXbmiINF1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikXbmiDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikXbmiWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikXbmiINF2'])){
                $q = "SELECT w.id, b.informacja, w.data_pomiaru, w.wynik FROM wynik AS w JOIN BMI AS b ON b.id = w.bmi_id ORDER BY b.informacja DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIKXBMI'>";
                echo "<tr><th>ID <button class='nasc' name='wynikXbmiID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikXbmiINF1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikXbmiDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikXbmiWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikXbmiDAT1'])){
                $q = "SELECT w.id, b.informacja, w.data_pomiaru, w.wynik FROM wynik AS w JOIN BMI AS b ON b.id = w.bmi_id ORDER BY w.data_pomiaru;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIKXBMI'>";
                echo "<tr><th>ID <button class='nasc' name='wynikXbmiID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikXbmiINF1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikXbmiDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikXbmiWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikXbmiDAT2'])){
                $q = "SELECT w.id, b.informacja, w.data_pomiaru, w.wynik FROM wynik AS w JOIN BMI AS b ON b.id = w.bmi_id ORDER BY w.data_pomiaru DESC;";
        
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIKXBMI'>";
                echo "<tr><th>ID <button class='nasc' name='wynikXbmiID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikXbmiINF1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikXbmiDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikXbmiWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikXbmiWYN1'])){
                $q = "SELECT w.id, b.informacja, w.data_pomiaru, w.wynik FROM wynik AS w JOIN BMI AS b ON b.id = w.bmi_id ORDER BY w.wynik;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIKXBMI'>";
                echo "<tr><th>ID <button class='nasc' name='wynikXbmiID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikXbmiINF1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikXbmiDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikXbmiWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikXbmiWYN2'])){
                $q = "SELECT w.id, b.informacja, w.data_pomiaru, w.wynik FROM wynik AS w JOIN BMI AS b ON b.id = w.bmi_id ORDER BY w.wynik DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIKXBMI'>";
                echo "<tr><th>ID <button class='nasc' name='wynikXbmiID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikXbmiINF1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikXbmiDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikXbmiDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikXbmiWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikXbmiWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIKXBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }


            //JOIN KONIEC #################################################################################################################################

            //BMI POCZATEK ################################################################################################################################################################################
            if(isset($_POST['btn1'])){
                $q = "SELECT * FROM BMI;";
        
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaBMI'>";
                echo "<tr><th>ID <button class='nasc' name='bmiID1'><img src='1-9.png'></button> <button class='ndesc' name='bmiID2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MINIMALNA <button class='nasc' name='bmiVAL1'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MAKSYMALNA <button class='nasc' name='bmiVAL3'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL4'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='bmiINF1'><img src='az.png'></button> <button class='ndesc' name='bmiINF2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['bmiID1'])){
                $q = "SELECT * FROM BMI ORDER BY id;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaBMI'>";
                echo "<tr><th>ID <button class='nasc' name='bmiID1'><img src='1-9.png'></button> <button class='ndesc' name='bmiID2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MINIMALNA <button class='nasc' name='bmiVAL1'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MAKSYMALNA <button class='nasc' name='bmiVAL3'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL4'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='bmiINF1'><img src='az.png'></button> <button class='ndesc' name='bmiINF2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['bmiID2'])){
                $q = "SELECT * FROM BMI ORDER BY id DESC;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaBMI'>";
                echo "<tr><th>ID <button class='nasc' name='bmiID1'><img src='1-9.png'></button> <button class='ndesc' name='bmiID2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MINIMALNA <button class='nasc' name='bmiVAL1'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MAKSYMALNA <button class='nasc' name='bmiVAL3'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL4'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='bmiINF1'><img src='az.png'></button> <button class='ndesc' name='bmiINF2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['bmiVAL1'])){
                $q = "SELECT * FROM BMI ORDER BY wart_min;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaBMI'>";
                echo "<tr><th>ID <button class='nasc' name='bmiID1'><img src='1-9.png'></button> <button class='ndesc' name='bmiID2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MINIMALNA <button class='nasc' name='bmiVAL1'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MAKSYMALNA <button class='nasc' name='bmiVAL3'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL4'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='bmiINF1'><img src='az.png'></button> <button class='ndesc' name='bmiINF2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['bmiVAL2'])){
                $q = "SELECT * FROM BMI ORDER BY wart_min DESC;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaBMI'>";
                echo "<tr><th>ID <button class='nasc' name='bmiID1'><img src='1-9.png'></button> <button class='ndesc' name='bmiID2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MINIMALNA <button class='nasc' name='bmiVAL1'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MAKSYMALNA <button class='nasc' name='bmiVAL3'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL4'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='bmiINF1'><img src='az.png'></button> <button class='ndesc' name='bmiINF2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['bmiVAL3'])){
                $q = "SELECT * FROM BMI ORDER BY wart_max;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaBMI'>";
                echo "<tr><th>ID <button class='nasc' name='bmiID1'><img src='1-9.png'></button> <button class='ndesc' name='bmiID2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MINIMALNA <button class='nasc' name='bmiVAL1'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MAKSYMALNA <button class='nasc' name='bmiVAL3'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL4'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='bmiINF1'><img src='az.png'></button> <button class='ndesc' name='bmiINF2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['bmiVAL4'])){
                $q = "SELECT * FROM BMI ORDER BY wart_max DESC;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaBMI'>";
                echo "<tr><th>ID <button class='nasc' name='bmiID1'><img src='1-9.png'></button> <button class='ndesc' name='bmiID2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MINIMALNA <button class='nasc' name='bmiVAL1'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MAKSYMALNA <button class='nasc' name='bmiVAL3'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL4'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='bmiINF1'><img src='az.png'></button> <button class='ndesc' name='bmiINF2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['bmiINF1'])){
                $q = "SELECT * FROM BMI ORDER BY informacja;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaBMI'>";
                echo "<tr><th>ID <button class='nasc' name='bmiID1'><img src='1-9.png'></button> <button class='ndesc' name='bmiID2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MINIMALNA <button class='nasc' name='bmiVAL1'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MAKSYMALNA <button class='nasc' name='bmiVAL3'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL4'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='bmiINF1'><img src='az.png'></button> <button class='ndesc' name='bmiINF2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['bmiINF2'])){
                $q = "SELECT * FROM BMI ORDER BY informacja DESC;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaBMI'>";
                echo "<tr><th>ID <button class='nasc' name='bmiID1'><img src='1-9.png'></button> <button class='ndesc' name='bmiID2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MINIMALNA <button class='nasc' name='bmiVAL1'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL2'><img src='9-1.png'></button></th>
                <th>WARTOŚĆ MAKSYMALNA <button class='nasc' name='bmiVAL3'><img src='1-9.png'></button> <button class='ndesc' name='bmiVAL4'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='bmiINF1'><img src='az.png'></button> <button class='ndesc' name='bmiINF2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsBMI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsBMI(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            //BMI KONIEC ################################################################################################################################################################################

            //POZYCJA POCZATEK ##########################################################################################################################################################################
            if(isset($_POST['btn2'])){
                $q = "SELECT * FROM pozycja;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='pozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='pozycjaID2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='pozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='pozycjaNAZW2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsPOZYCJA(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['pozycjaID1'])){
                $q = "SELECT * FROM pozycja ORDER BY id;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='pozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='pozycjaID2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='pozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='pozycjaNAZW2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsPOZYCJA(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                mysqli_free_result($result);
            }

            if(isset($_POST['pozycjaID2'])){
                $q = "SELECT * FROM pozycja ORDER BY id DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='pozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='pozycjaID2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='pozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='pozycjaNAZW2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsPOZYCJA(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                mysqli_free_result($result);
            }

            if(isset($_POST['pozycjaNAZW1'])){
                $q = "SELECT * FROM pozycja ORDER BY nazwa;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='pozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='pozycjaID2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='pozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='pozycjaNAZW2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsPOZYCJA(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                mysqli_free_result($result);
            }

            if(isset($_POST['pozycjaNAZW2'])){
                $q = "SELECT * FROM pozycja ORDER BY nazwa DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaPOZYCJA'>";
                echo "<tr><th>ID <button class='nasc' name='pozycjaID1'><img src='1-9.png'></button> <button class='ndesc' name='pozycjaID2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='pozycjaNAZW1'><img src='az.png'></button> <button class='ndesc' name='pozycjaNAZW2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsPOZYCJA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsPOZYCJA(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                mysqli_free_result($result);
            }
            //POZYCJA KONIEC ################################################################################################################################################################################

            //TYPY POCZATEK ################################################################################################################################################################################
            if(isset($_POST['btn3'])){
                $q = "SELECT * FROM typy;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaTYPY'>";
                echo "<tr><th>ID <button class='nasc' name='typyID1'><img src='1-9.png'></button> <button class='ndesc' name='typyID2'><img src='9-1.png'></button></th>
                <th>KATEGORIA <button class='nasc' name='typyKAT1'><img src='az.png'></button> <button class='ndesc' name='typyKAT2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsTYPY(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsTYPY(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['typyID1'])){
                $q = "SELECT * FROM typy ORDER BY id;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaTYPY'>";
                echo "<tr><th>ID <button class='nasc' name='typyID1'><img src='1-9.png'></button> <button class='ndesc' name='typyID2'><img src='9-1.png'></button></th>
                <th>KATEGORIA <button class='nasc' name='typyKAT1'><img src='az.png'></button> <button class='ndesc' name='typyKAT2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsTYPY(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsTYPY(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['typyID2'])){
                $q = "SELECT * FROM typy ORDER BY id DESC;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaTYPY'>";
                echo "<tr><th>ID <button class='nasc' name='typyID1'><img src='1-9.png'></button> <button class='ndesc' name='typyID2'><img src='9-1.png'></button></th>
                <th>KATEGORIA <button class='nasc' name='typyKAT1'><img src='az.png'></button> <button class='ndesc' name='typyKAT2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsTYPY(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsTYPY(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['typyKAT1'])){
                $q = "SELECT * FROM typy ORDER BY kategoria;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaTYPY'>";
                echo "<tr><th>ID <button class='nasc' name='typyID1'><img src='1-9.png'></button> <button class='ndesc' name='typyID2'><img src='9-1.png'></button></th>
                <th>KATEGORIA <button class='nasc' name='typyKAT1'><img src='az.png'></button> <button class='ndesc' name='typyKAT2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsTYPY(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsTYPY(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['typyKAT2'])){
                $q = "SELECT * FROM typy ORDER BY kategoria DESC;";
    
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaTYPY'>";
                echo "<tr><th>ID <button class='nasc' name='typyID1'><img src='1-9.png'></button> <button class='ndesc' name='typyID2'><img src='9-1.png'></button></th>
                <th>KATEGORIA <button class='nasc' name='typyKAT1'><img src='az.png'></button> <button class='ndesc' name='typyKAT2'><img src='za.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsTYPY(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsTYPY(1)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            
            //TYPY KONIEC ################################################################################################################################################################################

            //TYPY USLUGI ################################################################################################################################################################################
            if(isset($_POST['btn4'])){
                $q = "SELECT * FROM uslugi";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['uslugiID1'])){
                $q = "SELECT * FROM uslugi ORDER BY id;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiID2'])){
                $q = "SELECT * FROM uslugi ORDER BY id DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['uslugiPOZ1'])){
                $q = "SELECT * FROM uslugi ORDER BY nazwa;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiPOZ2'])){
                $q = "SELECT * FROM uslugi ORDER BY nazwa DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['uslugiRODZ1'])){
                $q = "SELECT * FROM uslugi ORDER BY rodzaj;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiRODZ2'])){
                $q = "SELECT * FROM uslugi ORDER BY rodzaj DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['uslugiNAZW1'])){
                $q = "SELECT * FROM uslugi ORDER BY nazwa;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiNAZW2'])){
                $q = "SELECT * FROM uslugi ORDER BY nazwa DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }

            if(isset($_POST['uslugiCEN1'])){
                $q = "SELECT * FROM uslugi ORDER BY cena;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            if(isset($_POST['uslugiCEN2'])){
                $q = "SELECT * FROM uslugi ORDER BY cena DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaUSLUGI'>";
                echo "<tr><th>ID <button class='nasc' name='uslugiID1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiID2'><img src='9-1.png'></button></th>
                <th>POZYCJA <button class='nasc' name='uslugiPOZ1'><img src='az.png'></button> <button class='ndesc' name='uslugiPOZ2'><img src='za.png'></button></th>
                <th>RODZAJ <button class='nasc' name='uslugiRODZ1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiRODZ2'><img src='9-1.png'></button></th>
                <th>NAZWA <button class='nasc' name='uslugiNAZW1'><img src='az.png'></button> <button class='ndesc' name='uslugiNAZW2'><img src='za.png'></button></th>
                <th>CENA <button class='nasc' name='uslugiCEN1'><img src='1-9.png'></button> <button class='ndesc' name='uslugiCEN2'><img src='9-1.png'></button></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td><td>". $row[4] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsUSLUGI(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(3)'>X</button></th>
                <th><button type='button' onclick='hideColumnsUSLUGI(4)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";

                mysqli_free_result($result);
            }
            //USLUGI KONIEC ################################################################################################################################################################################

            //WYNIK POCZATEK ################################################################################################################################################################################
            if(isset($_POST['btn5'])){
                $q = "SELECT * FROM WYNIK;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIK'>";
                echo "<tr><th>ID <button class='nasc' name='wynikID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikINF1'><img src='az.png'></button> <button class='ndesc' name='wynikINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIK(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikID1'])){
                $q = "SELECT * FROM WYNIK ORDER BY id DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIK'>";
                echo "<tr><th>ID <button class='nasc' name='wynikID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikINF1'><img src='az.png'></button> <button class='ndesc' name='wynikINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIK(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikID2'])){
                $q = "SELECT * FROM WYNIK ORDER BY id DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIK'>";
                echo "<tr><th>ID <button class='nasc' name='wynikID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikINF1'><img src='az.png'></button> <button class='ndesc' name='wynikINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIK(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikINF1'])){
                $q = "SELECT * FROM WYNIK ORDER BY informacja;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIK'>";
                echo "<tr><th>ID <button class='nasc' name='wynikID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikINF1'><img src='az.png'></button> <button class='ndesc' name='wynikINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIK(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikINF2'])){
                $q = "SELECT * FROM WYNIK ORDER BY informacja DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIK'>";
                echo "<tr><th>ID <button class='nasc' name='wynikID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikINF1'><img src='az.png'></button> <button class='ndesc' name='wynikINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIK(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikDAT1'])){
                $q = "SELECT * FROM WYNIK ORDER BY data_pomiaru;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIK'>";
                echo "<tr><th>ID <button class='nasc' name='wynikID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikINF1'><img src='az.png'></button> <button class='ndesc' name='wynikINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIK(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikDAT2'])){
                $q = "SELECT * FROM WYNIK ORDER BY data_pomiaru DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIK'>";
                echo "<tr><th>ID <button class='nasc' name='wynikID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikINF1'><img src='az.png'></button> <button class='ndesc' name='wynikINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIK(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikWYN1'])){
                $q = "SELECT * FROM WYNIK ORDER BY wynik;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIK'>";
                echo "<tr><th>ID <button class='nasc' name='wynikID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikINF1'><img src='az.png'></button> <button class='ndesc' name='wynikINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIK(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }

            if(isset($_POST['wynikWYN2'])){
                $q = "SELECT * FROM WYNIK ORDER BY wynik DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaWYNIK'>";
                echo "<tr><th>ID <button class='nasc' name='wynikID1'><img src='1-9.png'></button> <button class='ndesc' name='wynikID2'><img src='9-1.png'></button></th>
                <th>INFORMACJA <button class='nasc' name='wynikINF1'><img src='az.png'></button> <button class='ndesc' name='wynikINF2'><img src='za.png'></button></th>
                <th>DATA <button class='nasc' name='wynikDAT1'><img src='az.png'></button> <button class='ndesc' name='wynikDAT2'><img src='za.png'></th>
                <th>WYNIK <button class='nasc' name='wynikWYN1'><img src='1-9.png'></button> <button class='ndesc' name='wynikWYN2'><img src='9-1.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>". $row[3] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsWYNIK(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(2)'>X</button></th>
                <th><button type='button' onclick='hideColumnsWYNIK(3)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                
                mysqli_free_result($result);
            }
            //WYNIK KONIEC ################################################################################################################################################################################

            //ZDJECIA POCZATEK ################################################################################################################################################################################
            if(isset($_POST['btn6'])){
                $q = "SELECT * FROM zdjecia;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaZDJECIA'>";
                echo "<tr><th>ID <button class='nasc' name='zdjecieID1'><img src='1-9.png'></button> <button class='ndesc' name='zdjecieID2'><img src='9-1.png'></button></th>
                <th>ZDJĘCIE <button class='nasc' name='zdjecieZDJ1'><img src='az.png'></button> <button class='ndesc' name='zdjecieZDJ2'><img src='za.png'></th>
                <th>PODPIS <button class='nasc' name='zdjeciePOD1'><img src='az.png'></button> <button class='ndesc' name='zdjeciePOD2'><img src='za.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td><img class='zdjecie' title='kot :3' alt='kot :3' src='". $row[1] ."'></td><td>". $row[2] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsZDJECIA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(2)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                

                mysqli_free_result($result);
            }

            if(isset($_POST['zdjecieID1'])){
                $q = "SELECT * FROM zdjecia ORDER BY id;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaZDJECIA'>";
                echo "<tr><th>ID <button class='nasc' name='zdjecieID1'><img src='1-9.png'></button> <button class='ndesc' name='zdjecieID2'><img src='9-1.png'></button></th>
                <th>ZDJĘCIE <button class='nasc' name='zdjecieZDJ1'><img src='az.png'></button> <button class='ndesc' name='zdjecieZDJ2'><img src='za.png'></th>
                <th>PODPIS <button class='nasc' name='zdjeciePOD1'><img src='az.png'></button> <button class='ndesc' name='zdjeciePOD2'><img src='za.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td><img class='zdjecie' title='kot :3' alt='kot :3' src='". $row[1] ."'></td><td>". $row[2] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsZDJECIA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(2)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                

                mysqli_free_result($result);
            }

            if(isset($_POST['zdjecieID2'])){
                $q = "SELECT * FROM zdjecia ORDER BY id DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaZDJECIA'>";
                echo "<tr><th>ID <button class='nasc' name='zdjecieID1'><img src='1-9.png'></button> <button class='ndesc' name='zdjecieID2'><img src='9-1.png'></button></th>
                <th>ZDJĘCIE <button class='nasc' name='zdjecieZDJ1'><img src='az.png'></button> <button class='ndesc' name='zdjecieZDJ2'><img src='za.png'></th>
                <th>PODPIS <button class='nasc' name='zdjeciePOD1'><img src='az.png'></button> <button class='ndesc' name='zdjeciePOD2'><img src='za.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td><img class='zdjecie' title='kot :3' alt='kot :3' src='". $row[1] ."'></td><td>". $row[2] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsZDJECIA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(2)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                

                mysqli_free_result($result);
            }

            if(isset($_POST['zdjecieZDJ1'])){
                $q = "SELECT * FROM zdjecia ORDER BY nazwaPliku;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaZDJECIA'>";
                echo "<tr><th>ID <button class='nasc' name='zdjecieID1'><img src='1-9.png'></button> <button class='ndesc' name='zdjecieID2'><img src='9-1.png'></button></th>
                <th>ZDJĘCIE <button class='nasc' name='zdjecieZDJ1'><img src='az.png'></button> <button class='ndesc' name='zdjecieZDJ2'><img src='za.png'></th>
                <th>PODPIS <button class='nasc' name='zdjeciePOD1'><img src='az.png'></button> <button class='ndesc' name='zdjeciePOD2'><img src='za.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td><img class='zdjecie' title='kot :3' alt='kot :3' src='". $row[1] ."'></td><td>". $row[2] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsZDJECIA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(2)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                

                mysqli_free_result($result);
            }

            if(isset($_POST['zdjecieZDJ2'])){
                $q = "SELECT * FROM zdjecia ORDER BY nazwaPliku DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaZDJECIA'>";
                echo "<tr><th>ID <button class='nasc' name='zdjecieID1'><img src='1-9.png'></button> <button class='ndesc' name='zdjecieID2'><img src='9-1.png'></button></th>
                <th>ZDJĘCIE <button class='nasc' name='zdjecieZDJ1'><img src='az.png'></button> <button class='ndesc' name='zdjecieZDJ2'><img src='za.png'></th>
                <th>PODPIS <button class='nasc' name='zdjeciePOD1'><img src='az.png'></button> <button class='ndesc' name='zdjeciePOD2'><img src='za.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td><img class='zdjecie' title='kot :3' alt='kot :3' src='". $row[1] ."'></td><td>". $row[2] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsZDJECIA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(2)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                

                mysqli_free_result($result);
            }

            if(isset($_POST['zdjeciePOD1'])){
                $q = "SELECT * FROM zdjecia ORDER BY podpis;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaZDJECIA'>";
                echo "<tr><th>ID <button class='nasc' name='zdjecieID1'><img src='1-9.png'></button> <button class='ndesc' name='zdjecieID2'><img src='9-1.png'></button></th>
                <th>ZDJĘCIE <button class='nasc' name='zdjecieZDJ1'><img src='az.png'></button> <button class='ndesc' name='zdjecieZDJ2'><img src='za.png'></th>
                <th>PODPIS <button class='nasc' name='zdjeciePOD1'><img src='az.png'></button> <button class='ndesc' name='zdjeciePOD2'><img src='za.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td><img class='zdjecie' title='kot :3' alt='kot :3' src='". $row[1] ."'></td><td>". $row[2] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsZDJECIA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(2)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                

                mysqli_free_result($result);
            }

            if(isset($_POST['zdjeciePOD2'])){
                $q = "SELECT * FROM zdjecia ORDER BY podpis DESC;";
            
                $result = mysqli_query($conn, $q);
                echo "<form method='POST'>";
                echo "<table id='TabelaZDJECIA'>";
                echo "<tr><th>ID <button class='nasc' name='zdjecieID1'><img src='1-9.png'></button> <button class='ndesc' name='zdjecieID2'><img src='9-1.png'></button></th>
                <th>ZDJĘCIE <button class='nasc' name='zdjecieZDJ1'><img src='az.png'></button> <button class='ndesc' name='zdjecieZDJ2'><img src='za.png'></th>
                <th>PODPIS <button class='nasc' name='zdjeciePOD1'><img src='az.png'></button> <button class='ndesc' name='zdjeciePOD2'><img src='za.png'></th></tr>";
                while($row = mysqli_fetch_row($result)){
                    echo "<tr><td>". $row[0] ."</td><td><img class='zdjecie' title='kot :3' alt='kot :3' src='". $row[1] ."'></td><td>". $row[2] ."</td></tr>";
                }
                echo "<tr>
                <th><button type='button' onclick='hideColumnsZDJECIA(0)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(1)'>X</button></th>
                <th><button type='button' onclick='hideColumnsZDJECIA(2)'>X</button></th>
                </tr>";
                echo "</table>";
                echo "</form>";
                

                mysqli_free_result($result);
            }
            //ZDJECIA POCZATEK ################################################################################################################################################################################
        ?>
    </main>
</body>
</html>