<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?></title>

  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
  <meta name="robots" content="index, follow" />
  <?php if (!empty($pageCanonical)): ?>
  <link rel="canonical" href="<?= htmlspecialchars($pageCanonical) ?>" />
  <?php endif; ?>

  <meta property="og:title" content="<?= htmlspecialchars($pageOgTitle ?? $pageTitle) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>" />
  <meta property="og:type" content="website" />
  <?php if (!empty($pageOgUrl)): ?>
  <meta property="og:url" content="<?= htmlspecialchars($pageOgUrl) ?>" />
  <?php endif; ?>
  <meta property="og:image" content="<?= htmlspecialchars($pageOgImage ?? 'https://www.berlianarthaabadi.co.id/assets/images/og-image.jpg') ?>" />
  <meta property="og:locale" content="id_ID" />

  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg" />
  <link rel="apple-touch-icon" href="/assets/images/favicon.svg" />

  <?php if (!empty($preloadImages)): foreach ($preloadImages as $img): ?>
  <link rel="preload" href="<?= htmlspecialchars($img) ?>" as="image" />
  <?php endforeach; endif; ?>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />

  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'" />
  <noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  </noscript>

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <link rel="stylesheet" href="/css/style.css" />

  <?php if (!empty($extraHead)) echo $extraHead; ?>
</head>
