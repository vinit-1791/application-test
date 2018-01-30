<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Application test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".button").click(function(){
                    // console.log($(this).parents("tr").find(".name").html()+" "+$(this).parents("tr").find(".email").html());
                    alert("Name : "+$(this).parents("tr").find(".name").html()+" and email id :"+$(this).parents("tr").find(".email").html())
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <table id="people" class="table table-bordered mt-4">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                <?php
                foreach($people as $person) {
                ?>
                    <tr>
                        <td class="id"><?php echo $person['id'] ?></td>
                        <td class="name"><?php echo $person['first_name']." ".$person['last_name'] ?></td>
                        <td class="email"><?php echo $person['email'] ?></td>
                        <td><button class="btn btn-info button">Click here</button></td>
                        <!-- we can also pass name and email as an argument to alert in onclick event -->
                        <!--td><button class="btn btn-info button" onClick="alert(<?php echo "Name : ".$person['first_name']." ".$person['last_name']." and email id : ".$person['email']?>)">Click here</button></td-->
                    </tr>
                <?php  
                }
                ?>
            </table>
        </div>
    </body>
</html>