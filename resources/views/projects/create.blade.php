<!DOCTYPE html>
<html>
    <head>
        <title>Projects</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    </head>
    <body>
        
        
        <div class="container">
            
            <div>
                <h1>Create New Projects</h1>
            </div>

            <div>

                <form method="POST" action="/projects">

                    @csrf

                    <input class="form-control" type="text" placeholder="Project Title" name="title">
    
                    <br>
                    <textarea  class="form-control" placeholder="Project Description" name="description"></textarea>
    
                    <br>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>

    </body>
</html>