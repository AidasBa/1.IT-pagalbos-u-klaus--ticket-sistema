## Problema
Organizacijoje darbuotojai IT problemas siunčia el. paštu, telefonu arba žinutėmis, todėl dalis užklausų pasimeta, neaiškus jų prioritetas ir atsakingas asmuo.

## Naudotojai
1.	Darbuotojas — teikia IT pagalbos užklausas ir stebi jų būseną; nori greitai pateikti problemą ir matyti, kada ji bus išspręsta.
2.	IT specialistas / Administratorius — registruoja, klasifikuoja užklausas, priskiria prioritetus ir sprendžia problemas; nori matyti aiškų darbų sąrašą ir prioritetus be pasimetusių užklausų.

## Esamas procesas (as-is)
Kur dabar saugoma: El. paštas, telefono skambučiai, pokalbių programėlės.
Proceso žingsniai: 
1. Darbuotojas parašo arba paskambina IT specialistui, 
2. Užklausa pamirštama arba užrašoma ant lapelio / pasimeta susirašinėjimuose,
3. Sprendžiama be jokios eilės ar prioriteto tvarkos.

Kur gaižta laikas: 
Laikas gaištamas aiškinantis, kas atsakingas už problemą, ir ieškant pasimetusių užklausų istorijos.
Kas atsitinka, kai kažkas pasimeta: 
Darbuotojas lieka be pagalbos, darbai stoja, o IT skyrius sulaukia pasipiktinimo dėl delsimo.

## Norimas pokytis (to-be)
Visi IT incidentai bus registruojami vienoje centralizuotoje sistemoje, suteikiant jiems unikalius numerius ir statusus.
Kiekvienai užklausai bus automatiškai priskiriamas prioritetas ir atsakingas darbuotojas, o visi komentarai ir sprendimo laikas bus fiksuojami vienoje vietoje.
Ką matuosime: 
,,100% užklausų registruojamos sistemoje", 
,,vidutinis užklausų sprendimo laikas matuojamas realiu laiku",
,,nėra nepastebėtų ar pasimetusių pranešimų".

## Ribos (ko NEDARYSIME)
1.	Mobiliosios programėlės nedarysime — nes per turimą laiką kokybiškai jos sukurti nespėsime, apsiribojant responsyvia WEB sąsaja.

## Analogų palyginimas	
*Analogas*                        *3 pagrindinės funkcijos*	                                         *Kas naudinga / kas ne*
Jira Service Management	        1. Užklausų registravimas ir eilių valdymas                      Naudinga: labai galingas įrankis, puikiai tinka didelėms komandoms.
                                2. SLA (sprendimo laiko) sekimas                                 Ne naudinga: per daug sudėtingas ir perkrautas funkcijomis mažai organizacijai.
                                3. Detalios ataskaitos ir statistika	 

Zendesk	                        1. Daugiakanalis užklausų surinkimas (el. paštas, pokalbiai)     Naudinga: patogi sąsaja, greitas diegimas.
                                2. Automatinis priskirimas agentams                              Ne naudinga: brangus palaikymas ir prenumeratos mokestis smulkiam verslui.
                                3. Vartotojų pasitenkinimo vertinimas	

