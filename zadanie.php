<?php

try{
$db =new PDO('sqlite:biblioteka1.db');

$db->exec("CREATE TABLE biblioteka1(id INTEGER PRIMARY KEY, Tytul TEXT, Autor TEXT, data_wydania DATE, ilosc INTEGER)");

$db->exec("INSERT INTO biblioteka1(id,Tytul,Autor,data_wydania,ilosc) VALUES(1,'Harry Potter','J.K.Rowling','2000-10-12','1');");
$db->exec("INSERT INTO biblioteka1(id,Tytul,Autor,data_wydania,ilosc) VALUES(2,'Hobbit','J.R.R. Tolkien','2000-10-12','1');");
$db->exec("INSERT INTO biblioteka1(id,Tytul,Autor,data_wydania,ilosc) VALUES(3,'Opowiesci z narni','C.S.Lewis','2000-10-12','1');");
$db->exec("INSERT INTO biblioteka1(id,Tytul,Autor,data_wydania,ilosc) VALUES(4,'Pinokio','Carlo Collodi','2000-10-12','1');");
$db->exec("INSERT INTO biblioteka1(id,Tytul,Autor,data_wydania,ilosc) VALUES(5,'Ten obcy','Irena Jurgielewiczowa','2000-10-12','1');");


print "<table border=1>";
print "<tr><td>Id</td><td>Tytul</td><td>Autor</td><td>data_wydania</td><td>ilosc</td></tr>";

$result = $db->query('SELECT * FROM biblioteka1');

foreach($result as $row){
    print "<tr><td>".$row['id']."</td>";
    print "<tr><td>".$row['Tytul']."</td>";
    print "<tr><td>".$row['Autor']."</td>";
    print "<tr><td>".$row['data_wydania']."</td>";
    print "<tr><td>".$row['ilosc']."</td></tr>";
}

print "</table>";

}catch(PDOException $e){
   echo $e->getMessage();
}




?>