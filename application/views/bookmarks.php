<div id="content">
	<div id="blog">
		<h1>Bookmarks</h1>
		<?php
		for($i=0;$i<count($posts);$i++){
			echo "<div id=\"post\"><h2><a href=\"".$posts[$i]['link']."\" target=\"_blank\">".$posts[$i]['title']."</a></h2>\nPosted ".$this->myfunctions->relativeTime(strtotime($posts[$i]['pubDate']))."<br>".utf8_decode($posts[$i]['content'])."</div>";
		}
		?>
		<a href="<?php echo $this->config->item('delicious_url'); ?>" target="_blank"><?php echo $this->config->item('my_name'); ?>'s Bookmarks</a>
	</div>
</div>