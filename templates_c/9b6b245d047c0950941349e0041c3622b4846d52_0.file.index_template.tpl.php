<?php
/* Smarty version 4.3.4, created on 2025-10-28 22:21:56
  from 'C:\xampp\htdocs\LAB6\templates\index_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690133f4aa7441_22476429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6b245d047c0950941349e0041c3622b4846d52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LAB6\\templates\\index_template.tpl',
      1 => 1761686512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690133f4aa7441_22476429 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index Template</title>
    <link rel="stylesheet" href="./CSS/template.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div id="index-particles-js"></div>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient bg-opacity-75">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="images/logo.png" alt="Logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <?php if ((isset($_smarty_tpl->tpl_vars['user_data']->value['username'])) && $_smarty_tpl->tpl_vars['user_data']->value['username'] != '') {?>
                <a class="nav-link">Welcome, <?php echo $_smarty_tpl->tpl_vars['user_data']->value['username'];?>
!</a>
              <?php } else { ?>
                <a class="nav-link">Welcome!</a>
              <?php }?>
            </li>
          </ul>

          <ul class="navbar-nav mb-auto mb-2 mb-lg-0" >
            <ul class="navbar-nav mb-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="./logout_action.php">Logout</a></li>
              <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
              <li class="nav-item"><a class="nav-link" href="./templates/blog.php">Post blog</a></li>
            </ul>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container py-2">
      <!-- Carousel -->
      <div class="carousel-wrapper">
        <div id="carouselExampleAutoplaying" class="carousel slide custom-carousel" data-bs-ride="carousel" data-bs-interval="9000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./images/car.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./images/plant2.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./images/pasta.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./images/view.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./images/square_cat.jpg" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- Recent Posts Table -->
      <div class="recent-posts table-container">
        <div class="table-responsive custom-table">
          <table class="table table-borderless align-middle posts-table">
            <thead class="table-dark">
              <tr>
                <th colspan="4" class="text-right">Recent Posts</th>
              </tr>
              <tr>
                <th scope="col">Post</th>
                <th scope="col">Author</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
              </tr>
            </thead>
            <tbody class="table-group-divider table-secondary">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                <tr class="post-row">
                  <td class="post-content"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                  <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                  <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value['created_at'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                  <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value['updated_at'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- User's posts table -->
    <div class="table-container">
      <div class="table-responsive custom-table">
        <table class="table table-borderless align-middle">
          <thead class="table-primary">
            <tr>
              <th scope="col">Changes</th>
              <th scope="col">Date</th>
              <th scope="col">Hour</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <td>created</td>
              <td>2020-11-23</td>
              <td>23:21</td>
            </tr>
            <tr>
              <td>updated</td>
              <td>2020-11-23</td>
              <td>23:21</td>
            </tr>
          </tbody>
        </table>
      </div>
      <a href=#>Send blog</a>
    </div>

    
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"><?php echo '</script'; ?>
>    
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"><?php echo '</script'; ?>
>
    <!-- Particles.js configuration for background -->
    <?php echo '<script'; ?>
>
      particlesJS("index-particles-js", {
        "particles": {
          "number": {
            "value": 80,
            "density": { "enable": true, "value_area": 800 }
          },
          "color": { "value": "#f2f2f2" },
          "shape": {
            "type": "circle",
            "stroke": { "width": 0, "color": "#000000" },
            "polygon": { "nb_sides": 5 }
          },
          "opacity": { "value": 0.5 },
          "size": { "value": 3, "random": true },
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
            "onhover": { "enable": true, "mode": "repulse" },
            "onclick": { "enable": true, "mode": "push" },
            "resize": true
          },
          "modes": {
            "repulse": { "distance": 200, "duration": 0.4 },
            "push": { "particles_nb": 4 }
          }
        },
        "retina_detect": false
      });
    <?php echo '</script'; ?>
>
    
  </body>
</html> <?php }
}
