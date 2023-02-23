<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./identy.css">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <?php
    session_start();
    $_SESSION["name"] = 5;
    ?>
</head>

<body>
    <div class="d2" id="invoice">
        <?php



        echo ("<div>
            <h1>VEC Ambikapur,Sarguja</h1>

        </div>");


        $name = $_REQUEST['name'];
        $email = $_REQUEST["email"];
        $branch = $_REQUEST["branch"];
        $roll = $_REQUEST["roll"];
        $enroll = $_REQUEST["enroll"];
        $dob = $_REQUEST["dob"];
        $mono = $_REQUEST["mono"];

        $fx = $_FILES["rt"];

        // $_SESSION["name"] = $_POST["$name"];
        // $_SESSION["email"] = $_POST["$email"];
        // $_SESSION["branch"] = $_POST["$branch"];
        // $_SESSION["roll"] = $_POST["$roll"];
        // $_SESSION["enroll"] = $_POST["$enroll"];
        // $_SESSION["dob"] = $_POST["$dob"];
        // $_SESSION["mono"] = $_POST["$mono"];

        $f = $fx['tmp_name'];
        $fq = "./coll/" . $fx['name'];
        $fx = $fx['name'];
        move_uploaded_file($f, "coll/" . $fx);
        echo "<img width='90px' height='120px' src='$fq' />";

        echo (" <br><table>");
        echo ("<tr><td>Name</td><td>:</td> <td>$name</td></tr>");
        echo ("<tr><td>Date Of Birth</td><td>:</td> <td>$dob</td></tr>");
        echo ("<tr><td>Branch</td><td>:</td> <td>$branch</td></tr>");
        echo ("<tr><td>Enrollment No.</td><td>:</td> <td>$enroll</td></tr>");
        echo ("<tr><td>Mobile No.</td><td>:</td> <td>$mono</td></tr>");
        echo ("<tr><td>Email</td><td>:</td> <td>$email</td></tr>");

        echo ("</table>");



        ?>

    </div>

    <div id="download">

        <input id="cmd" type="submit" value="Download" />


    </div>
    <script>
        window.onload = function() {
            document.getElementById("download")
                .addEventListener("click", () => {
                    const invoice = this.document.getElementById("invoice");
                    console.log(invoice);
                    console.log(window);
                    var opt = {
                        margin: 1,
                        filename: 'myfile.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 2
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'letter',
                            orientation: 'portrait'
                        }
                    };
                    html2pdf().from(invoice).set(opt).save();
                })
        }
    </script>


</body>



</html>