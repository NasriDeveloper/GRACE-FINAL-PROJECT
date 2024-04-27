<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Tast;

class ClasfoImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // Define the expected number of columns for each row
        $expectedColumnCount = 52;
    
        foreach ($rows as $row) {
            // Check if the current row has the expected number of columns
            if (count($row) < $expectedColumnCount) {
                // Log a warning or error message for rows with insufficient data
                error_log("Skipping row due to insufficient data: " . json_encode($row));
                continue;
            }
    
            // Try-catch block to handle exceptions during data processing
            try {
                // Create a new Clasfo record if $row has sufficient data
                Tast::create([
                    'S/N' => $row[0],
                    'SEX' => $row[1],
                    'NAME' => $row[2],
                    'email' => $row[3],         
                    'ENGSCORE' => $row[4],
                    'ENGGRD' => $row[5],
                    'ENGPOS' => $row[6],
                    'ENGRE' => $row[7],
                    'KISWSCORE' => $row[8],
                    'KISWGRD' => $row[9],
                    'KISWPOS' => $row[10],
                    'KISWRE' => $row[11],
                    'CMSCORE' => $row[12],
                    'CMGRD' => $row[13],
                    'CMPOS' => $row[14],
                    'CMRE' => $row[15],
                    'SSTSCORE' => $row[16],
                    'SSTGRD' => $row[17],
                    'SSTPOS' => $row[18],
                    'SSTRE' => $row[19],
                    'SCIESCORE' => $row[20],
                    'SCIEGRD' => $row[21],
                    'SCIEPOS' => $row[22],
                    'SCIERE' => $row[23],
                    'MATHSCORE' => $row[24],
                    'MATHGRD' => $row[25],
                    'MATHPOS' => $row[26],
                    'MATHRE' => $row[27],
                    'TOTAL' => $row[28],
                    'AVERAGE' => $row[29],
                    'POSITION' => $row[30],
                    'GRADE' => $row[31],
                    'STREAM' => $row[32],
                    'sports' => $row[33],
                    'Cooperation' => $row[34],
                    'Discipline' => $row[35],
                    'Cleanliness' => $row[36],
                    'Hardworking' => $row[37],
                    'REMARKS' => $row[38],
                    'clasteachcoment' => $row[39],
                    'clasteachname' => $row[40],
                    'clasteachphone' => $row[41],
                    'principalcoment' => $row[42],
                    'principalname' => $row[43],
                    'principalphone' => $row[44],
                    'CLASS' => $row[45],
                    'ENGTE' => $row[46],
                    'KISWTE' => $row[47],
                    'CMETE' => $row[48],
                    'SSTTE' => $row[49],
                    'SCIETE' => $row[50],
                    'MATHTE' => $row[51],

                ]);
                
            
                
                
            } catch (Exception $e) {
                // Log any exceptions that occur during data processing
                error_log('Error importing row: ' . json_encode($row) . ' - ' . $e->getMessage());
            }
        }
    }
    
    
    
    
}

