<?php

function hideEmail($email = '', $percent = 30)
{
   preg_match('~([^@]+)@([^\.]+)((\.[^$]+)+)~', $email, $email_parts);

   $prefix_percent = (strlen($email_parts[1]) * $percent) / 100; // Calcular porcentaje
   $prefix_email = substr($email, 0, $prefix_percent) . str_repeat('*', strlen($email_parts[1])-($prefix_percent-1)); // Prefijo
   //$suffix_email = str_repeat('*', strlen($email_parts[2])) . $email_parts[3];
   $suffix_email = $email_parts[2] . $email_parts[3]; // Sufijo
   $new_email = $prefix_email . '@' . $suffix_email; // Correo a mostrar

   return $new_email;
}