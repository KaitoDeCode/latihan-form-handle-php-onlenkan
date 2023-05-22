<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmatika Form Handle</title>
</head>
<style>
    .button-wrapper{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    form{
        width: 500px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
    }
    form button{
        width: 200px;
        height: 35px;
        border-radius: 10px;
        margin-top: 10px;
        cursor: pointer;
    }
    form button:hover{
        border: 4px solid black;
    }
    form label{
        display: flex;
        align-items: flex-start;
    }
</style>
<body>
    <form action="aritmatika-action.php" method="GET">
        <label for="num1">angka pertama</label>
        <input type="number" name="num1">
        <label for="num2">angka kedua</label>
        <input type="number" name="num2">
        <div class="button-wrapper">
            <button type="submit">Kalikan</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>



<!-- Macam Macam Method form -->
<!-- 1.GET => untuk mengambil data  -->
<!-- 2.POST => untuk menyimpan atau mengirim data -->
<!-- 3.PUT => untuk mengedit data -->
<!-- 4.DELETE => untuk menghapus data -->


<!-- tipe tipe button -->
<!-- 1.Submit => biasanya digunakan untuk mengirim data-->
<!-- 2.Button => biasanya berhubungan dengan Javascript -->
<!-- 3.Reset => menghilangkan semua inputan -->