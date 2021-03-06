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
    <p>
        <a href="/employees" class="btn btn-success">Go To Employees</a>
    </p>

    <h1>Companies AdminPanel</h1>
    <p>
        <a href="/companies/create" class="btn btn-success">Insert New Company</a>
    </p>
    <!-- <p>
        <a href="/employees/update" class="btn btn-success">Update Employee</a>
    </p> -->

    <form>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search For companies" name="search" value="<?php echo $search ?>">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Logo</th>
                <th scope="col">Website</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $i => $company) : ?>
                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td><?php echo $company['name'] ?></td>
                    <td><?php echo $company['email'] ?></td>
                    <td><?php echo $company['logo'] ?></td>
                    <td><?php echo $company['website'] ?></td>
                    <td>
                        <a href="/companies/update?id=<?php echo $company['cmp_id'] ?>" class="btn btn-sm btn-outline-secondary">Edit</a>

                        <form style="display: inline-block" method="POST" action="/companies/{{ $company->cmp_id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            <!-- <button class="text-xs text-gray-400">Delete</button> -->
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>