<section class="container-game">

<?php

require_once 'header-sidebar.php';
$winner = 'n';
$box = array('','','','','','','','','');
if(isset($_POST['submitbtn'])){
    $box[0] = $_POST['box0'];
    $box[1] = $_POST['box1'];
    $box[2] = $_POST['box2'];
    $box[3] = $_POST['box3'];
    $box[4] = $_POST['box4'];
    $box[5] = $_POST['box5'];
    $box[6] = $_POST['box6'];
    $box[7] = $_POST['box7'];
    $box[8] = $_POST['box8'];

if(($box[0]=='o' && $box[1]=='o' && $box[2]=='o') ||
($box[3]=='o' && $box[4]=='o' && $box[5]=='o') ||
($box[6]=='o' && $box[7]=='o' && $box[8]=='o') ||
($box[0]=='o' && $box[3]=='o' && $box[6]=='o') ||
($box[2]=='o' && $box[6]=='o' && $box[8]=='o') ||
($box[2]=='o' && $box[4]=='o' && $box[6]=='o') ||
($box[1]=='o' && $box[4]=='o' && $box[7]=='o') ||
($box[2]=='o' && $box[5]=='o' && $box[8]=='o') ||
($box[0]=='o' && $box[9]=='o' && $box[8]=='o')){
    $winner = 'o';
} 
$blank = 0;
for($i=0; $i<=8; $i++){
    if($box[$i] == ''){
        $blank = 1;
    }
}
if($blank == 1 && $winner =='n'){
    $i = rand() % 8;
    while($box[$i] != ''){
        $i = rand() %8;
    }
    $box[$i] = 'x';
    if(($box[0]=='x' && $box[1]=='x' && $box[2]=='x') ||
($box[3]=='x' && $box[4]=='x' && $box[5]=='x') ||
($box[6]=='x' && $box[7]=='x' && $box[8]=='x') ||
($box[0]=='x' && $box[3]=='x' && $box[6]=='x') ||
($box[2]=='x' && $box[6]=='x' && $box[8]=='x') ||
($box[2]=='x' && $box[4]=='x' && $box[6]=='x') ||
($box[1]=='x' && $box[4]=='x' && $box[7]=='x') ||
($box[2]=='x' && $box[5]=='x' && $box[8]=='x') ||
($box[0]=='x' && $box[9]=='x' && $box[8]=='x')){
    $winner = 'x';
}
}else if($winner=='n'){
    $winner = 't';
}
}


?>
<article class="col col-game-spacing">
    <article class="subtitle-row">
        <h2>Playing game...</h2>
        <article class="alert-spacing">
            <?php
            if($winner=='o'){
                echo '<article class="alert">You Win!!</article>';
            }elseif($winner=='o'){
                echo '<article class="alert">Computer Win!!</article>';
            }elseif($winner=='t'){
                echo '<article class="alert">Draw</article>';
            }
            ?>
            
        </article>
        <figure class="container-photo circle img_tic o"></figure>
        <figure class="container-photo circle img_tic x"></figure>
        <p class="dates">Time: <span class="time">12 sec</span></p>
        <h3 class="relative-pos-game">
            <span class="points"><span class="nameuser">Player: <span class="usermoves moves">2</span></span></span><span class="points"><span class="computer">Computer: <span class="computermoves moves">2</span></span></span>
        </h3>
    </article>
    <article class="container-row relative-pos-game">
        <article class="game">
            <form action='playing-game.php' method="post">
                <article class="field"><input id="b1" type='text' name='box0' style='color: rgba(255,255,255,0);' value='<?php echo $box[0]?>' class="btn img_tic <?= $box[0]=='o'?'o':'';?><?=$box[0]=='x'?'x':'';?>"></article>
                <article class="field"><input id="b1" type='text' name='box1' style='color: rgba(255,255,255,0);' value='<?php echo $box[1]?>' class="btn img_tic <?= $box[1]=='o'?'o':'';?><?=$box[1]=='x'?'x':'';?>"></article>
                <article class="field"><input id="b1" type='text' name='box2' style='color: rgba(255,255,255,0);' value='<?php echo $box[2]?>' class="btn img_tic <?= $box[2]=='o'?'o':'';?><?=$box[2]=='x'?'x':'';?>"></article>
                <article class="field"><input id="b1" type='text' name='box3' style='color: rgba(255,255,255,0);' value='<?php echo $box[3]?>' class="btn img_tic <?= $box[3]=='o'?'o':'';?><?=$box[3]=='x'?'x':'';?>"></article>
                <article class="field"><input id="b1" type='text' name='box4' style='color: rgba(255,255,255,0);' value='<?php echo $box[4]?>' class="btn img_tic <?= $box[4]=='o'?'o':'';?><?=$box[4]=='x'?'x':'';?>"></article>
                <article class="field"><input id="b1" type='text' name='box5' style='color: rgba(255,255,255,0);' value='<?php echo $box[5]?>' class="btn img_tic <?= $box[5]=='o'?'o':'';?><?=$box[5]=='x'?'x':'';?>"></article>
                <article class="field"><input id="b1" type='text' name='box6' style='color: rgba(255,255,255,0);' value='<?php echo $box[6]?>' class="btn img_tic <?= $box[6]=='o'?'o':'';?><?=$box[6]=='x'?'x':'';?>"></article>
                <article class="field"><input id="b1" type='text' name='box7' style='color: rgba(255,255,255,0);' value='<?php echo $box[7]?>' class="btn img_tic <?= $box[7]=='o'?'o':'';?><?=$box[7]=='x'?'x':'';?>"></article>
                <article class="field"><input id="b1" type='text' name='box8' style='color: rgba(255,255,255,0);' value='<?php echo $box[8]?>' class="btn img_tic <?= $box[8]=='o'?'o':'';?><?=$box[8]=='x'?'x':'';?>"></article>
                
            
        </article>
    </article>
    <?php
        if($winner=='o' || $winner=='x' || $winner =='t'){
            echo '<article class="container-row center form">
            <article class="form-win">
                <form>
                    <label for="nickname">Enter your Nickname </label>
                    <input id="nickname" type="text" name="nickname" placeholder="Nickname">
                    <input type="submit" name="" id="" class="" value="Submit">
                </form>
                <article class="alert-spacing-error">
                    <article class="alert"><span class="underline">Message:</span> Enter your nickname !!</article>
                </article>
            </article>
            <br>
        </article>';
        }
        if($winner=='n'){
            ?>
            <div class='button-start'>
                <button type="submit" value='submitbtn' class='' name='submitbtn'>GO</button>
            </div>
            <?php
        }else{
            ?>
            <div class="button-start">
                <a href="index.php?template=1"><button>START NEW GAME</button></a>
            </div>
            <?php
        }
        
    ?>
    
    
    </form>
</article>
</section>
