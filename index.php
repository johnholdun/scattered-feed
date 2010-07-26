<? require 'data.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scattered Feed</title>
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="alternate" type="application/rss+xml" href="/feed">
  </head>
  <body>
    <header>
      <h1>Scattered Feed</h1>
      <p>I&rsquo;m scattering feed for the chickens. Now it&rsquo;s all scattered.</p>
    </header>
        
    <ul class="feed">
<? foreach ($items as $item) : ?>
      <li>
        <h2><a href="<?= $item['link'] ?>"><span><?= SmartyPants(($item['title'])) ?></span></a></h2>
        <p><?= ($item['description']) ?></p>
        <p class="date"><?= date('F j', $item['published_at']) ?></p>
      </li>
<? endforeach; ?>
    </ul>
  </body>
</html><!-- <?= milliseconds() - $time . "ms"; ?> -->
