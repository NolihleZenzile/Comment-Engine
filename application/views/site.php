<html>
    <head>
        <title>final kohana</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
         <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <div id="main">
        <div id="addCommentContainer">
            <p>Add a Comment</p>
            <form id="addCommentForm" method="post" action="">
                <div>
                    <label for="name">Your Name</label>
                    <input type="text" id="name" />

                    <label for="email">Your Email</label>
                    <input type="text" name="email" id="email" />
                    
                    <label for="body">Comment Body</label>
                    <textarea id="comment" cols="20" rows="5"></textarea>
                    <input type="submit" id="submit" value="Submit" />
                </div>
            </form>
        </div>

        </div>
        <div id="comments">
             <?php 
        
             $html="<div><i>";
             foreach($Comments as $comment){
                  $html.="$comment->username says.... </i> $comment->comment <br  /><br  />  on  $comment->comment_date
                        <input  id='reply' type='button'><a href='#'>reply</a></button> </div> <br  />";
                        } 
                        echo $html;
             
           
        ?>
            
        </div>
        
       
        
    </body>
   
</html>