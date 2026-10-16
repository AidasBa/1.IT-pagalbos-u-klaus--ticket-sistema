# 1000 įrašų                                                    # 20 000 įrašų
Versija A (filtravimas programoje):     3.08ms                  40ms        
Versija B (WHERE SQL'e):                2ms                     25ms

Paieška tarp 1000 įrašų užtruko 3,08 ms filtruojant programoje ir 2 ms atliekant filtravimą SQL užklausoje. Padidinus duomenų kiekį iki 20 000 įrašų, vykdymo laikas išaugo iki 40 ms programoje ir 25 ms SQL užklausoje.