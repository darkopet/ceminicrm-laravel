<p><a href="/companies/index" class="btn btn-secondary">Go Back To COMPANIES</a></p>

<h2>NEW Company</h2>

<?php // include_once "_form.php" ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/app.css">

    <title>Mini CRM AdminPanel</title>
</head>

<body>
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <div> <?php echo $error ?> </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>company First Name</label>
            <input type="text" name="Name" value="<?php echo $company['name'] ?>" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>company Last Name</label>
            <input type="text" name="Email" value="<?php echo $company['email'] ?>" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>Company</label>
            <input type="number" name="Logo" value="<?php echo $company['logo'] ?>" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>Company Email</label>
            <input type="text" name="Website" value="<?php echo $company['website'] ?>" class="form-control">
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>