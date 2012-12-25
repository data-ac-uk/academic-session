<?php
header("HTTP/1.1 303 See Other");
header( "Location: http://academic-session.data.ac.uk".$_SERVER["REQUEST_URI"].".ttl" );
