<strong>Database Connected: </strong>
<?php
    try {
        \DB::connection()->getPDO();
        echo = \DB::connection()->getDatabaseName();

        $tables = \DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            echo $table->Tables_in_d4q3oni2d3ftgh;
        }
    } catch (\Exception $e) {
          echo 'None';
    }
?>
