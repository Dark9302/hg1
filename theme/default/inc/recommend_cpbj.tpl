<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- {if $recommend_cpbj} -->
<div class="incBox">
 <h3><a href="{$url.article}?id=3">{$lang.article_cpbj}</a></h3>
 <ul class="recommendArticle">
  <!-- {foreach from=$recommend_cpbj name=recommend_cpbj item=article} -->
  <li{if $smarty.foreach.recommend_cpbj.last} class="last"{/if}><b>{$article.add_time_short}</b><a href="{$article.url}">{$article.title|truncate:26:"..."}</a></li>
  <!-- {/foreach} -->
 </ul>
</div>
<!-- {/if} -->