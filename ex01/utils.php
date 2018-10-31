<?php 
$article=array();
$article[0]=array('titre' => 'article1', 'texte' => 'texte ..........', 'auteur' =>'auteur article', 'date' => '03 October 2005');
$article[1]=array('titre' => 'article2', 'texte' => 'texte1 ..........', 'auteur' =>'auteur2 article', 'date' => '05 January 2022');
$article[2]=array('titre' => 'article3', 'texte' => 'texte2 ..........', 'auteur' =>'auteur3 article', 'date' => '16 October 2013');
$article[3]=array('titre' => 'article4', 'texte' => 'texte3 ..........', 'auteur' =>'auteur4 article', 'date' => '16 October 2000');
$article[4]=array('titre' => 'article4', 'texte' => 'texte3 ..........', 'auteur' =>'auteur4 article', 'date' => '16 October 2018');

$articleRecupere=array();
define('LENGTH', count($article));
function getArticle($nbreArticles=LENGTH){
     global $article;
     global $articleRecupere;
     // tri 
        function tri($a,$b) {
           return strtotime($b['date']) - strtotime($a['date']);
        }
        usort($article, function ($a,$b) {
            return strtotime($b['date']) - strtotime($a['date']);
          } 
        );
     //affichage des derniers articles 
        for($i=0;$i<$nbreArticles;$i++){
           //vérification des dates postérieures
          if ((strtotime("now")-strtotime($article[$i]['date']))>=0)
           $articleRecupere[]=$article[$i];
           elseif($nbreArticles!=LENGTH) $nbreArticles+=1; 
        }
        echo '<pre class="article">';
        print_r($articleRecupere);
        echo '</pre>';
  }
?>
