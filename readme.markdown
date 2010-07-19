# Scattered Feed

## A simple way to aggregate your links in HTML and RSS with [Yaml][]

A while back I decided to [migrate away from Tumblr][Migration] in favor of less tightly joined, less strictly formatted bits of publication, often using flat HTML and CSS and relying on basic filesystem routing. But I still needed a way to maintain aggregation and in that case I *didn't* want to go for flat HTML, especially considering I'd need to duplicate everything (on my "index page" and in its accompanying RSS feed).

So I did this. There's a Yaml file that takes an array of objects, each containing a title, URL, publish date, and description, and spits them out in any way I desire.

These are the bones of the operation, including a few useful helpers that sort the items and don't publish any whose publish timestamp are in the future (which means easy post scheduling). I opted for no pagination, so everything is spit out on a single page, but it should be apparent where to make changes if such an approach is desired.

Scattered Feed uses [Symfony][]'s Yaml library. [SmartyPants][] is also included though I suppose it isn't *necessary*.

[Yaml]: http://yaml.org
[Migration]: http://johnholdun.tumblr.com/374067477
[Symfony]: http://symfony-project.org
[SmartyPants]: http://daringfireball.net/projects/smartypants/