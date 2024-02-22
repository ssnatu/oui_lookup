<?php

namespace App\Console\Commands;

use App\Models\Address;
use App\Models\Assignment;
use App\Models\Organization;
use Illuminate\Console\Command;

class ImportOuiCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:oui-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import latest version of the IEEE OUI data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = public_path('oui.csv');

        if (!file_exists($filename)) {
            $this->error('OUI CSV file not found'); return;
        }

        $file = fopen($filename, 'r');
        $header = fgetcsv($file); // header row
        $countOrg = 0;
        $countAssignment = 0;

        // Read each row one by one after the header row
        while (($row = fgetcsv($file)) !== false) {
            // sanitize strings
            $organization_name = trim($row[2]);
            $organization_address = trim(preg_replace('/\s+/',' ', $row[3])); // remove excess spaces within the address string

            $assignment = Assignment::where('assignment', trim($row[1]))
                        ->first();

            if (!$assignment) {
                $organization = Organization::where('name', $organization_name)->first();
                if ($organization) {

                } else {
                    $orgData = [
                        'name' => $organization_name
                    ];

                    $organization = new Organization($orgData);
                    $organization->save();

                    $this->info('Imported: ' . $organization_name);
                    $countOrg++;
                }

                $assignmentData = [
                    'organization_id' => $organization->id,
                    'registry' => trim($row[0]),
                    'assignment' => trim($row[1]),
                    'address' => $organization_address
                ];

                $assignment = new Assignment($assignmentData);
                $assignment->save();
                $countAssignment++;
            }
        }

        fclose($file);

        $this->info('Organizations: ' . $countOrg . ', Assignments: ' . $countAssignment . ' OUI data imported successfully!');
    }
}
