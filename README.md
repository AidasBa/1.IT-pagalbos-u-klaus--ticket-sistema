## TEMA
IT pagalbos užklausų („ticket“) sistema
Sukurti sistemą, kurioje registruojamos IT užklausos, priskiriamas prioritetas ir atsakingas darbuotojas, sekama būsena, fiksuojami komentarai ir sprendimo laikas.

## TURINYS
-REIKALAVIMAI IR PRIKLAUSOMYBĖS
-DIEGIMAS IR PALEIDIMAS
-DUOMENŲ BAZĖS PARUOŠIMAS
-KAIP PALEISTI PROGRAMĄ

## REIKALAVIMAI IR PRIKLAUSOMYBĖS
Prieš pradedant, jūsų kompiuteryje turi būti įdiegta:
-XAMPP
-Git versijų valdymo sistema

Taip pat reikia dešiniu pelės klavišu paspausti ant XAMPP, atsidaryti failo vietą ir į darbalaukį persikelti "htdocs" folderį. Į šį folderį sukurti folderį "ticket-sistema" ir į jį perkelti visus failus esančius git

## DIEGIMAS IR PALEIDIMAS
Git clone: https://github.com/AidasBa/1.-IT-pagalbos-u-klaus-ticket-sistema-.git
Cd ticket-sistema

## DUOMENŲ BAZĖS PARUOŠIMAS
Atsidarius programą ,,XAMPP“ įjungti ,,Apache“ ir ,,MYSQL“.
MySQL skiltyje paspausti "admin" mygtuką. 
Sukurti duomenų bazę pavadinimu ticket_sistema.
Importuoti projekte esantį SQL failą.
Patikrinti, ar sukurtos lentelės: users tickets comments

## KAIP PALEISTI PROGRAMĄ
Įjungti Apache ir MySQL paslaugas XAMPP programoje.
Naršyklėje atidaryti login.php puslapį. http://localhost/ticket-sistema/src/login.php
Pasirinkti vieną iš sistemos vaidmenų: Darbuotojas / IT specialistas
Po prisijungimo galima: kurti užklausas; readaguoti užklausas; keisti užklausų būseną; komentuoti užklausas; naudoti paiešką ir filtravimą; peržiūrėti archyvą (specialisto paskyroje).

## AUTORIUS
Aidas Babravičius – Programavimo praktika, 2026m.
