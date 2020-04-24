<?php

/* 
Đọc session ID
 */
session_start();

echo "Session ID: ". strtoupper(session_id());
?>