<?php 

$balls = [
    ['color' => 'red', 'size' => 5,'material' => 'plastic'],
    ['color' => 'blue', 'size' => 3, 'material' => 'rubber'],
    ['color' => 'gold', 'size' => 4, 'material' => 'gold'],
    ['color' => 'yellow', 'size' => 2, 'material' => 'foam'],
];


?>
<ul>
    <?php foreach ($balls as $ball): ?>

        <?php if($ball['color'] == 'red'): ?>
            <li class="<?php echo $ball['color']; ?>"> <?php echo $ball['color']; ?></li>
        <?php endif; ?>
        
    <?php endforeach; ?>
</ul>

<style>
   .red {
    background: red;
    color: white;
   }
   .blue {
    background: blue;
    color: white;
   }
   .gold {
    background: gold;
    color: black;
   }
   .yellow {
    background: yellow;
    color: black;
   }

   li{
    padding: 19px;
    margin: 5px;
    border-radius: 5px;
    list-style: none;
    font-size: 20px;
    text-align: center;
    font-weight: bold;
   }
</style>