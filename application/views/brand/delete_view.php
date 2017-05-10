<html>
    <head>
        <title>Delete Data From Database Using CodeIgniter</title>
		
		<!-------------Importing google fonts------------->
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>./css/delete.css">
    </head>
    <body>
        <div id="container">
            <div id="wrapper">
                <h1>Delete Data From Database Using CodeIgniter </h1><hr/> 
                <div id="menu">
                    <p>Click On Menu</p>
					 <!--------Displaying Fetched Names from database in Links----------> 
                    <ol>
                        <?php foreach ($brand as $product): ?>
                            <li><a href="<?php echo base_url() . "index.php/delete_ctrl/show_student_id/" . $student->student_id; ?>"><?php echo $student->student_name; ?></a></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
                <div id="detail">
                   
				   <!--------Displaying Fetched Details from database ---------->   
                    <?php foreach ($single_brand as $student): ?>
                        <p>Student Detail</p>
                        <?php echo $student->student_name; ?><br/>
                        <?php echo $student->student_email; ?><br/>
                        <?php echo $student->student_mobile; ?><br/>
                        <?php echo $student->student_address; ?><br/>
					
					<!--------Delete button ----------> 	
                    <a href="<?php echo base_url() . "index.php/delete_ctrl/delete_student_id/" . $student->student_id; ?>"><button>Delete</button></a>
                    <?php endforeach; ?>


                </div> 
            </div> 

        </div>
    </body>
</html>