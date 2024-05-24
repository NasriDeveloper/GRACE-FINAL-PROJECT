<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Tost;

class ClasfaImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // Define the expected number of columns for each row
        $expectedColumnCount = 35;
    
        foreach ($rows as $row) {
            // Check if the current row has the expected number of columns
            if (count($row) < 35) {
                // Log a warning and skip this row
                error_log('Row has insufficient columns: ' . json_encode($row));
                continue;
            }
    
            // Try-catch block to handle exceptions during data processing
            try {
                // Create a new Clasfo record if $row has sufficient data
                Tost::create([
                    's/n' => $row[0],
                    'sex' => $row[1],
                    'name' => $row[2],
                    'email' => $row[3],
                    'readscore' => $row[4],
                    'readgrd' => $row[5],
                    'readpos' => $row[6],                         
                    'readre' => $row[7],
                    'writngscore' => $row[8],
                    'writnggrd' => $row[9],
                    'writngpos' => $row[10],
                    'writngre' => $row[11],
                    'artscore' => $row[12],
                    'artgrd' => $row[13],
                    'artpos' => $row[14],
                    'artre' => $row[15],
                    'kiswscore' => $row[16],
                    'kiswgrd' => $row[17],
                    'kiswpos' => $row[18],
                    'kiswre' => $row[19],
                    'healthscore' => $row[20],
                    'healthgrd' => $row[21],
                    'healthpos' => $row[22],
                    'healthre' => $row[23],
                    'numercyscore' => $row[24],
                    'numercygrd' => $row[25],
                    'numercypos' => $row[26],
                    'numercyre' => $row[27],
                    'total' => $row[28],
                    'average' => $row[29],
                    'position' => $row[30],
                    'grade' => $row[31],
                    'stream' => $row[32],
                    'remarks' => $row[33],
                    'class' => $row[34],
                ]);
                
            
                
                
            } catch (Exception $e) {
                // Log any exceptions that occur during data processing
                error_log('Error importing row: ' . json_encode($row) . ' - ' . $e->getMessage());
            }
        }
    }
    
    
    
    
}

