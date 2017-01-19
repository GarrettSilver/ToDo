
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
     <div class="list">
          <h1 class="header">To do.</h1>
          
          <ul class="items">
                    <?php require("link.php"); ?>
             <li>
                 <span class="item done">Go to gym</span>
                 <a href="#" class="done-button">Mark as done</a>
             </li>
          </ul>
          
          <form class="add-items" autocomplete="off">
               <input type="text name="new-task" placeholder="Type a new item here."autocomplete="off" required>
               <input type="submit" value="Add" class="submit">
          </form>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    add_task(); 

    function add_task() {
        $('.add-new-task').submit(function(){
     var new_task = $('.add-new-task input[name=new-task]').val();

     if(new_task != ''){
   $.post('addingtask.php', { task: new_task }, function( data ) {
        $('.add-new-task input[name=new-task]').val('');
        
                });
     }
      
        });
    }
</script>
</html>
