<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Send Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>


<div class="container-fluid">
    <form class="m-4" method="post" action="sendEmail.php">
        <div class="row">
            <div class="col-lg-6 col-12 mt-4">
                <div class="form-row">
                    <div class="form-group col-md-6 my-3">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" name="name" required placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 my-3">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" required placeholder="Email">
                    </div>
                </div>
                <div class="form-group my-3">
                    <label for="inputSubject">Subject</label>
                    <input type="text" class="form-control" id="inputSubject" name="subject" required placeholder="Subject">
                </div>
                <div class="form-group my-3">
                    <label for="inputMessage">Message</label>
                    <textarea type="text" class="form-control" id="inputMessage" name="message" required placeholder="Message.." rows="4" cols="2"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Mail</button>
            </div>
        </div>
    </form>

</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
