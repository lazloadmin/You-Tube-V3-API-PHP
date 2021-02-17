
<?php 





$API_key    = 'AIzaSyCljlunZ7lbrX-wciCJo0UkbVN-w21y4yU';

$channelID  = 'UCpEhnqL0y41EpW2TvWAHD7Q';

$maxResults = 100;

$videoList = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=".$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

 
echo '<pre>'; print_r($videoList->items); die;


count($videoList->items);  die;
foreach($videoList->items as $item){

       if(isset($item->id->videoId)){

       echo '<div class="youtube-video">

               <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>

               <h2>'. $item->snippet->title .'</h2>

           </div>';

   }

}


?>