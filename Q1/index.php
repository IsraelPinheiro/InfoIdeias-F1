<?php
    function CenturyOfYear($year){
        echo "Ano {$year} = século ".ceil($year/100)."<br>";
    }

    CenturyOfYear(1905);
    CenturyOfYear(1700);
    CenturyOfYear(2000);
    CenturyOfYear(2022);