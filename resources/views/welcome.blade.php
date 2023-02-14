<html>
<head>
    <title>Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="display:flex;justify-content:center;align-items:center">
<div class="wrapper" style="padding:30px;width:400px;height:600px;">
    <form method="POST" action="{{ route('registration.store') }}">
    @csrf
        <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control" />
            <label class="form-label" for="form2Example1">name</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" name="email" id="email" class="form-control" />
            <label class="form-label" for="form2Example1">Email</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
    </form>
</div>
</body>
</html>
