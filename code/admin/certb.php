<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
     
     $name = $_POST['name'];
     $regdno = $_POST['regdno'];
     $class = $_POST['class'];
     $room = $_POST['room'];
     $from = $_POST['from'];
     $to = $_POST['to'];
     $date = $_POST['date'];
	 $year = $_POST['year'];
     $reason= $_POST['reason'];
       $template_html = file_get_contents('certbg.php');
       $template_html = str_replace('name', $name, $template_html);
       $template_html = str_replace('ddmmyy', $date, $template_html);
       $template_html = str_replace('Course', $class, $template_html);
       $template_html = str_replace('room', $room, $template_html);
       $template_html = str_replace('regdno', $regdno, $template_html);
       $template_html = str_replace('Frm', $from, $template_html);
       $template_html = str_replace('To', $to, $template_html);
       $template_html = str_replace('certpur', $reason, $template_html);
       file_put_contents('certbg.html',$template_html);
       unlink('certbg.html');
       echo $template_html;








?>