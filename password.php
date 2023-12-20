<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Password</title>
    <!-- Includi Bootstrap da CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Risultato Password</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $passwordLength = $_POST["passwordLength"];

            // Logica di generazione password
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+[]{}|;:,.<>?';
            $password = '';
            for ($i = 0; $i < $passwordLength; $i++) {
                $password .= $characters[rand(0, strlen($characters) - 1)];
            }
        }
        ?>
        <?php if(isset($password)): ?>
            <p>La tua password generata è: <?php echo $password; ?></p>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
