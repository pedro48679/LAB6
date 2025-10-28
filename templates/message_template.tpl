<html>
  <head>

   {if $message_type == 1 }
      <title>Registration Complete</title>
      <meta http-equiv="refresh" content="20" />
   {/if}
   {if $message_type == 2 }
      <title>Goodbye page</title>       
      <meta http-equiv="refresh" content="10" />
   {/if}
  </head>
  <body>
   {$message}
  </body>
</html>