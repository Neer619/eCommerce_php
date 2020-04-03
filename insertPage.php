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