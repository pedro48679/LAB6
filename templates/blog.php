<?php
// ----- CONFIGURATION -----
$posts_per_page = 15; // 4x4 = 16 posts per page

// Dummy posts (replace with DB data later)
$posts = [];
for ($i = 1; $i <= 100; $i++) {
    $posts[] = [
        'title' => "Post Title $i",
        'content' => "This is the content of post number $i. It’s a short preview of the blog entry.",
    ];
}

// ----- Welcome Message -----
$user_data = [];

if (isset($_COOKIE['PHPSESSIONID'])) {
    $cookie_data = json_decode($_COOKIE['PHPSESSIONID'], true);

    if (is_array($cookie_data)) {
        $user_data = $cookie_data;
    }
}


// ----- PAGINATION LOGIC -----
$total_posts = count($posts);
$total_pages = ceil($total_posts / $posts_per_page);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
if ($page > $total_pages) $page = $total_pages;

$start_index = ($page - 1) * $posts_per_page;
$current_posts = array_slice($posts, $start_index, $posts_per_page);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple PHP Blog</title>
  <link rel="stylesheet" href="../CSS/template.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="blog-body">
  <div id="blog-particles-js"></div>
  <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient bg-opacity-75">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <?php if (isset($user_data['username']) && $user_data['username'] != ""): ?>
                <a class="nav-link">Welcome, <?= htmlspecialchars($user_data['username']); ?>!</a>
              <?php else: ?>
                <a class="nav-link">Welcome!</a>
              <?php endif; ?>
            </li>
          </ul>


          <ul class="navbar-nav mb-auto mb-2 mb-lg-0" >
            <ul class="navbar-nav mb-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="../logout_action.php">Logout</a></li>
              <li class="nav-item"><a class="nav-link" href="../login.php">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="../register.php">Register</a></li>
              <li class="nav-item"><a class="nav-link" href="./templates/blog.php">Post blog</a></li>
            </ul>
          </ul>
        </div>
      </div>
    </nav>

  <!-- Page Content -->
  <div class="container py-5">
    <blog-h1 class="text-center mb-5">My Blog</blog-h1>

    <div class="row g-4">
      <?php foreach ($current_posts as $post): ?>
        <div class="col-md-4">
          <div class="post-card h-100">
            <img src="<?= $post['image'] ?>" class="post-image" alt="<?= htmlspecialchars($post['title']) ?>">
            <div class="p-3">
              <h4 class="post-title"><?= htmlspecialchars($post['title']) ?></h4>
              <p class="post-text mb-0"><?= htmlspecialchars($post['content']) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-5">
      <nav>
        <ul class="pagination">
          <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?= $page - 1 ?>">← Previous</a>
          </li>

          <li class="page-item <?= ($page >= $total_pages) ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?= $page + 1 ?>">Next →</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script>
    particlesJS("blog-particles-js", {
      "particles": {
        "number": {
          "value": 150,
          "density": { "enable": true, "value_area": 700 }
        },
        "color": { "value": "#f2f2f2" },
        "shape": {
          "type": "circle",
          "stroke": { "width": 0, "color": "#000000" },
          "polygon": { "nb_sides": 5 }
        },
        "opacity": { "value": 0.6},
        "size": { "value": 6, "random": true },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "out_mode": "out"
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": { "enable": true, "mode": "bubble" },
          "onclick": { "enable": true, "mode": "push" },
          "resize": true
        },
        "modes": {
          "bubble": { "distance": 200, "duration": 0.4 },
          "push": { "particles_nb": 4 }
        }
      },
      "bubble": {
        "distance": 400,
        "size": -5,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "retina_detect": false
    });
  </script>
</body>
</html>
