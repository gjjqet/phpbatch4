<?php

require_once("Article.php");

$articles = new Article();

//=>Read 

// echo "<pre>".print_r($articles->getarticles(),true)."</pre>";
// var_dump($articles->getarticles());
// var_dump($articles->getarticles(););
// var_dump($articles->getarticlebyid(1));
// var_dump($articles->getarticlebyid(15));




//=> Insert 

// $data = ["title"=>"this is new article 13","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","user_id"=>4];
// $articles->insertarticle($data);
// var_dump($articles->getarticles());
// echo "<pre>".print_r($articles->getarticles(),true)."</pre>";



//=> Update 

// $data = ["id"=>11,"title"=>"this is new update article 11","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","user_id"=>4];
// $articles->updatearticle($data);
//  var_dump($articles->getarticles());
// echo "<pre>".print_r($articles->getarticles(),true)."</pre>";


//=> Delete 
$articles->deletearticle(10);
// var_dump($articles->getarticles());
// echo "<pre>".print_r($articles->getarticles(),true)."</pre>";


?>