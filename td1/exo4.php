$gras=($i%2==0)?"bold":"normal";
      ?>
        <tr>
        <?php for($j=0;$j<$nbColonnes;$j++){?>
            <td style="font-weight: <?=$gras ?>"><?="$i - $j"?></td>
        <?php for($j=0;$j<$nbColonnes;$j++){
            $couleur=($j%2==0)?"red":"black";
            ?>
            <td style="font-weight: <?=$gras ?>;color:<?=$couleur ?>"><?="$i - $j"?></td>
        <?php }?>
        </tr>
      <?php }?>