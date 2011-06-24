<?php
if ($this->config->item('delicious_enabled') != 1){
	redirect(base_url(),'refresh');
}
?>
		<div id="container">
			<div class="transparency"></div>
			<div class="content">
				<h1>Bookmarks</h1>
				<?php
				for($i=0;$i<count($posts);$i++){
					echo "<div id=\"post\"><h2><a href=\"".$posts[$i]['link']."\" target=\"_blank\">".$posts[$i]['title']."</a></h2>\nPosted ".$this->myfunctions->relativeTime(strtotime($posts[$i]['pubDate']))."</div>";
				}
				?>
				<a href="<?php echo $this->config->item('delicious_url'); ?>" target="_blank"><?php echo $this->config->item('my_name'); ?>'s Bookmarks</a>
			</div>
		</div>