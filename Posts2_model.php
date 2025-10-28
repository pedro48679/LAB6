<?php

// get posts
function get_posts($db)
  {
  // criar query numa string
  $query = "
      SELECT
        m.content AS content,
        u.name AS name,             
        m.created_at AS created_at,
        m.updated_at AS updated_at,
        m.user_id AS user_id
      FROM microposts AS m
      LEFT JOIN users AS u
        ON m.user_id = u.id
      ORDER BY m.created_at DESC
    ";

  // executar a query
  if(!($result = @ mysqli_query($db, $query)))
  showerror($db);

  // vai buscar o resultado da query

  $nrows  = mysqli_num_rows($result);
  for($i=0; $i<$nrows; $i++)
    $posts[$i] = mysqli_fetch_assoc($result);

/*
  // estrutura de loop alternativa
  while ($post = mysqli_fetch_assoc($result))
          $posts[] = $post;
*/

  // opcional: fechar a liga��o � base de dados
  mysqli_close($db);
  
  return $posts;
  
}



?>