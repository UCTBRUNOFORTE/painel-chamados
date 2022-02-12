<?php

file_put_contents(getcwd() . '/novos.txt',  $_REQUEST['data']['FIELDS']['ID'], FILE_APPEND);