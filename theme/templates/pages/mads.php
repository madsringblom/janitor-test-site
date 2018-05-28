<div class="scene front  i:mads" itemscope itemtype="http://schema.org/NewsArticle">

	<h1 itemprop="headline">User profile: Mads Ringblom</h1>
	<? 
	$profile_information = ['name'=>'mads', 'age'=>'36','title'=>'Rockstar-developer', 'status'=>'high'];
	foreach($profile_information as $key => $value) {
		print "$key : $value <br>";
	}
	?>

</div>
