<?php
    class Year{
        /**
         * @var integer $year
         */
        var $year;

        public function __construct($year){
            if(is_int($year)){
                if ($year>0){
                    $this->year = $year;
                }
                else{
                    $this->year = 1;
                }
            }else{
                $this->year = 1;
            }
        }

        /**
         * Gets the century that the year belongs to
         * @param int $year
         */
        public function getCentury():int{
            return ceil($this->year/100);
        }
    }

    function print_style(){
        echo "<style type='text/css'>";
        echo "table  {border-collapse:collapse;border-spacing:0;}";
        echo "table td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}";
        echo "table th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}";
        echo "</style>";
    }
    function print_table(){
        $years = [1905, 1700, 2000,26,-300,2022, 3000,"2022","Ano",2076,498,2359,1165,1022,3824];
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Year</th>";
        echo "<th>Century</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
  
        if(count($years)>0){
            foreach ($years as $year) {
                $oYear = new Year($year);
                echo "<tr>";
                echo "<th> ".$oYear->year." </th>";
                echo "<th> ".$oYear->getCentury()." </th>";
                echo "</tr>";
            }
        }
        else{
            echo "<tr>";
            echo "<th colspan=2>Empty Array</th>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    print_style();
    print_table();
?>