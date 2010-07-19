<? header('Content-Type: text/xml');
   require 'data.php'; ?>
<?= '<?xml version="1.0" encoding="UTF-8"?>' . "\n" ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>Scattered Feed</title>
    <link>http://google.com/search?q=scattered+feed</link>
    <description>This is my scattered feed.</description>
    <atom:link href="http://scattered-feed.com/feed" rel="self" type="application/rss+xml" />
<? foreach ($items as $item) : ?>
    <item>
      <title><?= $item['title'] ?></title>
      <description><![CDATA[ <?= $item['description'] ?> ]]></description>
      <link><?= $item['link'] ?></link>
      <guid isPermaLink="false"><?= $item['title'] ?> <?= $item['published_at'] ?></guid>
      <pubDate><?= date('r', $item['published_at']) ?></pubDate>
    </item>
<? endforeach; ?>
  </channel>
</rss>
