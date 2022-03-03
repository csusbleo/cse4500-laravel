<strong>Database Connected: </strong>
<?php
    try {
          echo \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
          echo 'None';
    }
?>
