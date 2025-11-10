<html>
<head>
    <title>11240031 - Fathir Muzakki</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <table border='1' width='100%' cellspacing='0' cellpadding='0'>
        <tr>
            <td colspan='2' height='100'><img src='images/header.gif' height='100%' width='100%'></td>
        </tr>
        <tr height='400'>
            <td width='150' valign='top'>
                <table border='0' width='100%' cellspacing='0' cellpadding='6'>
                    <tr bgcolor='cyan'>
                        <th>MENU</th>
                    </tr>
                    <tr>
                        <td><a href='index.php'><img src='images/home.png' height='17' width='16'>Beranda</a></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-person"></i>
						<a href='index.php?menu=profil'>Profil</a></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-file"></i>
						<a href='index.php?menu=cv'>CV</a></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-images"></i>
						<a href='index.php?menu=galeri'>Galeri</a></td>
                    </tr>
                </table>
            </td>
			
            <td valign='top' align='center'>
                <?php
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == 'profil') {
                        // jalankan file ini
                        include "profil.html";
                    }

                    if ($_GET['menu'] == 'cv') {
                        // jalankan file ini
						echo "<img src='images/CV.jpg' width='100%'>";
       
                    }

                    if ($_GET['menu'] == 'galeri') {
                        // jalankan file ini
                         echo "<img src='images/meme1.jpg' height='24.8%' width='31.9%' align='left'>";
						 echo "<img src='images/meme2.jpg' height='24.8%' width='31.9%'>";
						 echo "<img src='images/meme3.jpg' height='24.8%' width='31.9%' align='right'>";
						 echo "<img src='images/meme4.jpg' height='24.8%' width='31.9%' align='left'>";
						 echo "<img src='images/meme5.jpg' height='24.8%' width='31.9%'>";
						 echo "<img src='images/meme6.jpg' height='24.8%' width='31.9%' align='right'>";
						 
                    }
                } else {
                   include 'beranda.html';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan='2' height='50'><img src='images/footer.jpg'  width='100%'></td>
        </tr>
    </table>
</body>
</html>