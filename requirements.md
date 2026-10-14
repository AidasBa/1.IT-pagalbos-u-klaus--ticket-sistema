## Reikalavimai
Funkciniai reikalavimai (FR)
Nr.	    Reikalavimas	                                                                MoSCoW
FR-1	Sistema turi leisti darbuotojui sukurti naują užklausą.	                        M
FR-2	Sistema turi leisti darbuotojui peržiūrėti savo užklausas.	                    M
FR-3	Sistema turi leisti IT specialistui keisti užklausos būseną.	                M
FR-4	Sistema turi leisti IT specialistui pridėti komentarus.	                        M
FR-5	Sistema turi leisti IT specialistui priskirti prioritetą užklausai.	            M
FR-6	Sistema turi leisti administratoriui priskirti atsakingą darbuotoją.	        S
FR-7	Sistema turi leisti naudotojams prisijungti prie sistemos.	                    M

Nefunkciniai reikalavimai (NFR)
Nr.	    Reikalavimas	                                                    Matas	            MoSCoW
NFR-1	Sistemos puslapiai turi būti įkeliami greičiau nei 2 sekundės.	    < 2 s	            M
NFR-2	Sistema turi veikti bent 50 vienu metu prisijungusių naudotojų.	    50 naudotojų	    S
NFR-3	Kiekviena užklausa turi turėti unikalų numerį.	                                	    M

## User Stories
US-1
Kaip darbuotojas, noriu registruoti IT problemą, kad galėčiau gauti pagalbą.

AC: Kai užpildau formą ir paspaudžiu „Sukurti“, tada sistema išsaugo užklausą.

US-2
Kaip darbuotojas, noriu matyti savo užklausų būsenas, kad žinočiau sprendimo eigą.

AC: Kai atidarau savo užklausų sąrašą, tada matau visas savo užklausas ir jų būsenas.

US-3
Kaip IT specialistas, noriu keisti užklausos būseną, kad galėčiau sekti darbų eigą.

AC: Kai pakeičiu būseną, tada nauja būsena išsaugoma sistemoje.

US-4
Kaip IT specialistas, noriu pridėti komentarus prie užklausos, kad galėčiau fiksuoti atliktus veiksmus.

AC: Kai pridedu komentarą, tada jis matomas užklausos istorijoje.