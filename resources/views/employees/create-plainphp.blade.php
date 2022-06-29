<p>
    <a href="/employees/index" class="btn btn-secondary">Go Back To EMPLOYEES</a>
</p>

<h2>NEW Employee</h2>

<?php // include_once "_form.php" 
?>

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

    <form action="/employees/create" method="POST" enctype="multipart/form-data">

        <?php
        $EmployeeData = [
            'firstName' => '',
            'lastName' => '',
            'company_id' => '',
            'email' => '',
            'phone' => ''
        ];

        # Loading data from the $_POST and $_FILES via the controller
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $EmployeeData['FirstName'] = $_POST['FirstName'];
        //     $EmployeeData['LastName'] = $_POST['LastName'];
        //     $EmployeeData['Company'] = (int)$_POST['Company'];
        //     $EmployeeData['CompanyEmail'] = $_POST['CompanyEmail'] ?? null;
        //     $EmployeeData['Phone'] = $_POST['Phone'] ?? null;
        // }
        ?>

        <div class="form-group">
            <label>Employee First Name</label>
            <input type="text" name="FirstName" value="<?php $EmployeeData['firstName'] ?>" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>Employee Last Name</label>
            <input type="text" name="LastName" value="<?php $EmployeeData['lastName'] ?>" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>Company ID</label>
            <input type="number" name="Company" value="<?php $EmployeeData['company_id'] ?>" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>Company Email</label>
            <input type="text" name="CompanyEmail" value="<?php $EmployeeData['email'] ?>" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="Phone" value="<?php $EmployeeData['phone'] ?>" class="form-control">
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    echo "<pre>";
    var_dump($EmployeeData);
    echo "</pre><br><br>";
    // # Instance of the class Employee created before
    // $Employee = new \App\Models\Employee();
    // # Loading into the model    
    // $Employee->load($EmployeeData);
    // $Employee->save();
    ?>

    <?php
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre><br><br>";
    echo "<pre>";
    var_dump($_GET);
    echo "</pre><br><br>";
    echo "<pre>";
    var_dump($_POST);
    echo "</pre><br><br>";
    ?>
</body>

</html>