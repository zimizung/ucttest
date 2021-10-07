
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Go Back') ?></li>
        <li><?= $this->Html->link(__('back<<'), ['controller' => 'Pages','action' => 'home']) ?></li>
    </ul>
</nav>
<?php 
 echo "<hr>";
?>
<style>
.output{
    
    border:1px;
    padding: 5px;
    text-align: center;
}
</style>

<?php
    $string = "Hello world";
    $stringArray = count_chars($string,1);
    $values = 0;
    foreach ($stringArray as $key=>$value)
    {
        if($values == 0){
            $value = "";
            $values = 1;
        }
        echo "<p class=\"output\">";
                echo chr($key)."            ".$value."<br>";
        echo  "</p>";
    }

?>
