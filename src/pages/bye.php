
<!-- example.com/src/pages/hello.php -->
Bye <?= htmlspecialchars(isset($name) ? $name : 'World', ENT_QUOTES, 'UTF-8') ?>