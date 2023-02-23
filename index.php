<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Registration-form</title>
</head>


<!-- <script>
setTimeout(() => {
    window.location.reload();
}, 200)
</script> -->

<body>
    <form action="identy.php" method="POST" enctype="multipart/form-data">



        <h1>Personal Details</h1>

        <section>
            <div class="d1">
                <label for="name">Enter Your Name </label>
                <input name="name" type="text" required />
            </div>

            <div class="d1">
                <label for="">
                    Enter Your Email
                </label>
                <input name="email" type="email" required>
            </div>

            <div class="d1">
                <label for="">Enter Your branch:</label>
                <input name="branch" type="text" required>
            </div>

            <div class="d1">
                <label for="">Enter Your Roll no. :</label>
                <input name="roll" type="number" required>
            </div>

            <div class="d1">
                <label for="">Enter Your Enrollment no :</label>
                <input name="enroll" type="text" required>
            </div>

            <div class="d1">
                <label for="">Enter your date of birth:</label>
                <input name="dob" type="date" required>
            </div>

            <div class="d1">
                <label for="">Enter your Mobile No. :</label>
                <input name="mono" type="number" required />
            </div>

            <div class="d1">
                <label for="">Upload Your Photo</label>
                <input name="rt" type="file" accept="image/*" required>
            </div>

            <!-- <div class="d1">
                <p><img id="output" width="200" /></p>
            </div> -->

            <div class="d1">
                <input type="submit">
            </div>
        </section>

    </form>
</body>

<!-- <script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script> -->


</html>