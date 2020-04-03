<?php
    session_start();

    $option=$_POST['option'];
    echo $option;

    if($option=="mobile")
    {
        echo "
        <form action='includes/insertData.inc.php' method='POST' enctype='multipart/form-data' '>
            <input type='hidden' name='device' value='mobile'>
            <input type='file' name='photo' id=''><br>
            <input type='text' name='price' id='' placeholder='Price'><br>
            <input type='text' name='brand' id='' placeholder='Brand'><br>
            <input type='text' name='model_name' id='' placeholder='Model Name'><br>
            <input type='text' name='model_num' id='' placeholder='Model number'><br>
            <input type='text' name='ram' id='' placeholder='RAM'><br>
            <input type='text' name='gpu' id='' placeholder='GPU'><br>
            <input type='text' name='os' id='' placeholder='OS'><br>
            <input type='text' name='processor_type' id='' placeholder='Processor Type'><br>
            <input type='text' name='processor_core' id='' placeholder='Processor Core'><br>
            <input type='text' name='internal_storage' id='' placeholder='Internal Storage'><br>
            <input type='text' name='battery' id='' placeholder='Battery'><br>
            <button type='submit' name='submit'>Insert</button>
        </form>
        
        ";
    }
    else if($option=='laptop')
    {
        echo "
        <form action='includes/insertData.inc.php' method='POST' enctype='multipart/form-data' '>
            <input type='hidden' name='device' value='laptop'>
            <input type='file' name='photo' id=''><br>
            <input type='text' name='price' id='' placeholder='Price'><br>
            <input type='text' name='brand' id='' placeholder='Brand'><br>
            <input type='text' name='model_name' id='' placeholder='Model Name'><br>
            <input type='text' name='model_num' id='' placeholder='Model number'><br>
            <input type='text' name='ram' id='' placeholder='RAM'><br>
            <input type='text' name='gpu' id='' placeholder='GPU'><br>
            <input type='text' name='os' id='' placeholder='OS'><br>
            <input type='text' name='processor' id='' placeholder='Processor'><br>
            <input type='text' name='hdd_space' id='' placeholder='Hard Disk Storage'><br>
            <input type='text' name='battery' id='' placeholder='Battery'><br>
            <button type='submit' name='submit'>Insert</button>
        </form>
        
        ";

    }
    else if($option=='camera')
    {
        echo "
        <form action='includes/insertData.inc.php' method='POST' enctype='multipart/form-data' '>
            <input type='hidden' name='device' value='camera'>
            <input type='file' name='photo' id=''><br>
            <input type='text' name='price' id='' placeholder='Price'><br>
            <input type='text' name='brand' id='' placeholder='Brand'><br>
            <input type='text' name='model_name' id='' placeholder='Model Name'><br>
            <input type='text' name='model_num' id='' placeholder='Model number'><br>
            <input type='text' name='megapixel' id='' placeholder='Mega Pixel'><br>
            <input type='text' name='gpu' id='' placeholder='GPU'><br>
            <input type='text' name='sensor_type' id='' placeholder='Sensor Type'><br>
            <input type='text' name='type' id='' placeholder='Type Type'><br>
           
            <button type='submit' name='submit'>Insert</button>
        </form>
        
        ";
    }
    else if($option=='speaker')
    {
        echo "
        <form action='includes/insertData.inc.php' method='POST' enctype='multipart/form-data' '>
            <input type='hidden' name='device' value='speaker'>
            <input type='file' name='photo' id=''><br>
            <input type='text' name='price' id='' placeholder='Price'><br>
            <input type='text' name='brand' id='' placeholder='Brand'><br>
            <input type='text' name='model_name' id='' placeholder='Model Name'><br>
            <input type='text' name='model_num' id='' placeholder='Model number'><br>
            <input type='text' name='type' id='' placeholder='Type'><br>
            <input type='text' name='wired' id='' placeholder='Wired'><br>
           
            <button type='submit' name='submit'>Insert</button>
        </form>
        
        ";
    }
    else if($option=='watch')
    {
        echo "
        <form action='includes/insertData.inc.php' method='POST' enctype='multipart/form-data' '>
            <input type='hidden' name='device' value='watch'>
            <input type='file' name='photo' id=''><br>
            <input type='text' name='price' id='' placeholder='Price'><br>
            <input type='text' name='brand' id='' placeholder='Brand'><br>
            <input type='text' name='model_name' id='' placeholder='Model Name'><br>
            <input type='text' name='type' id='' placeholder='Type'><br>
            <input type='text' name='dial_color' id='' placeholder='Dial Color'><br>
            <input type='text' name='water_res' id='' placeholder='Water Resistant'><br>
            <input type='text' name='strap_type' id='' placeholder='Strap Type'><br>
       
            <button type='submit' name='submit'>Insert</button>
        </form>
        
        ";
    }
    

?>


<!-- <form action="includes/insertData.inc.php" action="POST">
    <input type="hidden" name="device" value="mobile">
    
    <input type="text" name="brand" id="" placeholder="Brand"><br>
    <input type="text" name="model_name" id="" placeholder="Model Name"><br>
    <input type="text" name="model_num" id="" placeholder="Model number"><br>
    <input type="text" name="ram" id="" placeholder="RAM"><br>
    <input type="text" name="gpu" id="" placeholder="GPU"><br>
    <input type="text" name="os" id="" placeholder="OS"><br>
    <input type="text" name="processor_type" id="" placeholder="Processor Type"><br>
    <input type="text" name="processor_core" id="" placeholder="Processor Core"><br>
    <input type="text" name="internal_storage" id="" placeholder="Internal Storage"><br>
    <input type="text" name="battery" id="" placeholder="Battery"><br>
    <button type="submit" name="insert">Insert</button>
</form> -->