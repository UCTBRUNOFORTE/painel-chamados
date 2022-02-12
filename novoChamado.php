<?php


file_put_contents(getcwd() . '/novos.txt',  print_r($_REQUEST, TRUE), FILE_APPEND);