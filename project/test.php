#!/usr/bin/env php
<?php 
echo `ls -la`;
if(!file_exists(__DIR__ . "/index2.php"))
   exit(1);

exit(0);

