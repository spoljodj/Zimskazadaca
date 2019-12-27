<?php
    session_start (); 

        $nazivAPP='Zimska zadaća';

        $dev = $_SERVER['HTTP_HOST']==='localhost'
        || $_SERVER['HTTP_HOST']==='127.0.0.1'
          ? true : false;