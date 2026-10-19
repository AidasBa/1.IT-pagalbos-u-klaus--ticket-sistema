# 1-as Bandymas

Užduotis: Sukurti aukšto prioriteto užklausą su pasirinktu specialistu.

Rezultatas: SĖKMINGA

URL: http://localhost/ticket-sistema/testai/test_sukuria_auksto_prioriteto_uzklausa_su_specialistu.php

# 2-as Bandymas

Užduotis: Aukštas prioritetas, bet specialistas nepasirinktas.

Rezultatas: ATMESTA

URL: http://localhost/ticket-sistema/testai/test_neleidzia_kurti_auksto_prioriteto_uzklausos_be_specialisto.php

Tyčinis sugadinimas: 

Vietoje: 

<?php

function galimaKurti($prioritetas, $assigned_to, $aprasymas)
{
    if($prioritetas == "aukstas" && empty($assigned_to))
    {
        return false;
    }
    
"return false;" pakeisti į "return true;"

# 3-as Bandymas

Užduotis: Aprašymas trumpesnis nei 5 simboliai.

Rezultatas: ATMESTA

URL: http://localhost/ticket-sistema/testai/test_neleidzia_kurti_uzklausos_su_per_trumpu_aprasymu.php

## Bonus: 4-as testas — kraštutinis atvejis

Užduotis: Užklausa su tuščiu aprašymu (kraštutinis atvejis)

Rezultatas: Pavyko

URL: http://localhost/ticket-sistema/testai/test_neleidzia_kurti_uzklausos_su_tusciu_aprasymu.php