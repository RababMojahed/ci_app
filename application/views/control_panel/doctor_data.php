<h2><?php echo $title;?></h2>
<form method="post" action="<?php echo site_url('clinic_controller/save_doctor_data');?>">
    <table>  
            <tr>  
                <td>ID:</td>  
                <td>:</td>  
                <td><input type="Number" name="id"></td>  
            </tr>  
            <tr>  
                <td>Name:</td>  
                <td>:</td>  
                <td><input type="text" name="name"></td>  
            </tr>  
            <tr>  
                <td>Speciality:</td>  
                <td>:</td>  
                <td><input type="text" name="speciality"></td>  
            </tr>  
            <tr>  
                <td>Nationality:</td>  
                <td>:</td>  
                <td><input type="text" name="nationality"></td>  
            </tr><br><br>  
            <tr>  
                <input type="submit" name="submit" value="Save">  
            </tr>  
        </table>  
    </form>  
</form>