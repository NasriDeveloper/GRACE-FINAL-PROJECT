<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Tist;

class ClasfiImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // Define the expected number of columns for each row
        $expectedColumnCount = 39;
    
        foreach ($rows as $row) {
            // Check if the current row has the expected number of columns
            if (count($row) < 39) {
                // Log a warning and skip this row
                error_log('Row has insufficient columns: ' . json_encode($row));
                continue;
            }
    
            // Try-catch block to handle exceptions during data processing
            try {
                // Create a new Clasfo record if $row has sufficient data
                Tist::create([
                    's/n' => $row[0],
                    'sex' => $row[1],
                    'name' => $row[2],
                    'email' => $row[3],
                    'engscore' => $row[4],
                    'enggrd' => $row[5],
                    'engpos' => $row[6],
                    'engre' => $row[7],
                    'kiswscore' => $row[8],
                    'kiswgrd' => $row[9],
                    'kiswpos' => $row[10],
                    'kiswre' => $row[11],
                    'cmscore' => $row[12],
                    'cmgrd' => $row[13],
                    'cmpos' => $row[14],
                    'cmre' => $row[15],
                    'sstscore' => $row[16],
                    'sstgrd' => $row[17],
                    'sstpos' => $row[18],
                    'sstre' => $row[19],
                    'sciescore' => $row[20],
                    'sciegrd' => $row[21],
                    'sciepos' => $row[22],
                    'sciere' => $row[23],
                    'mathscore' => $row[24],
                    'mathgrd' => $row[25],
                    'mathpos' => $row[26],
                    'mathre' => $row[27],
                    'vskillsscore' => $row[28],
                    'vskillsgrd' => $row[29],
                    'vskillspos' => $row[30],
                    'vskillsre' => $row[31],
                    'total' => $row[32],
                    'average' => $row[33],
                    'position' => $row[34],
                    'grade' => $row[35],
                    'stream' => $row[36],
                    'remarks' => $row[37],
                    'class' => $row[38],
                   
                ]);
                
            
                
                
            } catch (Exception $e) {
                // Log any exceptions that occur during data processing
                error_log('Error importing row: ' . json_encode($row) . ' - ' . $e->getMessage());
            }
        }
    }
    
    
    
    
}

